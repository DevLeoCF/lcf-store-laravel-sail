<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutoController extends Controller
{
    public function index()
    {
        $produtos = Produto::all(); // busca todos os produtos
        return view('produtos.index', compact('produtos'));
    }

    public function show(Produto $produto)
    {
        return view('produtos.show', compact('produto'));
    }

    public function create()
    {
        return view('produtos.create');
    }

    // Salvar o produto no banco
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nome' => 'required|string|max:255',
            'descricao' => 'nullable|string',
            'preco' => 'required|numeric|min:0',
            'imagem' => 'nullable|image|max:2048'
        ]);

        if ($request->hasFile('imagem')) {
            $path = $request->file('imagem')->store('produtos', 'public');
            $validated['imagem'] = $path;
        }

        Produto::create($validated);

        return redirect()->route('produtos.index')->with('success', 'Produto cadastrado com sucesso!');
    }

    public function edit(Produto $produto)
    {
        return view('produtos.edit', compact('produto'));
    }

    public function update(Request $request, Produto $produto)
    {
        $validated = $request->validate([
            'nome' => 'required|string|max:255',
            'descricao' => 'nullable|string',
            'preco' => 'required|numeric|min:0',
            'imagem' => 'nullable|image|max:2048', // novo upload é opcional
        ]);

        // Se enviou nova imagem, salva e atualiza
        if ($request->hasFile('imagem')) {
            $caminhoImagem = $request->file('imagem')->store('produtos', 'public');
            $validated['imagem'] = $caminhoImagem;
        }

        $produto->update($validated);

        return redirect()->route('produtos.show', $produto)->with('success', 'Produto atualizado com sucesso!');
    }


    public function destroy(Produto $produto)
    {
        $produto->delete();
        return redirect()->route('produtos.index')->with('success', 'Produto excluído com sucesso!');
    }


}
