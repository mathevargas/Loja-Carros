<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ProfileController extends Controller
{
    /**
     * Exibe o formulário de edição do perfil do usuário.
     *
     * @param Request $request
     * @return View
     */
    public function edit(Request $request): View
    {
        // Retorna a view 'profile.edit', passando o usuário autenticado para a view
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Atualiza as informações do perfil do usuário.
     *
     * @param ProfileUpdateRequest $request
     * @return RedirectResponse
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        // Preenche os dados do usuário com os dados validados do request
        $request->user()->fill($request->validated());

        // Se o campo de email foi alterado, limpa a verificação de email
        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        // Salva as alterações no perfil do usuário
        $request->user()->save();

        // Redireciona de volta para a página de edição do perfil com uma mensagem de status
        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Exclui a conta do usuário.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function destroy(Request $request): RedirectResponse
    {
        // Valida o request para exclusão do usuário, requerendo a senha atual
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        // Obtém o usuário atual
        $user = $request->user();

        // Desloga o usuário
        Auth::logout();

        // Deleta o usuário do banco de dados
        $user->delete();

        // Invalida a sessão do usuário
        $request->session()->invalidate();

        // Regenera o token da sessão
        $request->session()->regenerateToken();

        // Redireciona para a página inicial após a exclusão da conta
        return Redirect::to('/');
    }
}
