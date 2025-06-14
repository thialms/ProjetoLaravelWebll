<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\Produto;
use App\Models\Usuario;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class AppController extends Controller
{
    public function sobre(){
        $frame = "(Laravel)";
        $vantagens = ["Sintaxe simples", "Sintaxe concisa", "Sistema modular"];
        return view('sobre', ['frm'=>$frame, 'vtg'=>$vantagens]);
    }

    public function home(){
        $cards = [
            [
                'imagem' => 'https://static-00.iconduck.com/assets.00/laravel-icon-497x512-uwybstke.png',
                'nome' => 'Nuvem',
                'texto' => 'Plataforma de infraestrutura totalmente gerenciada para implantação e hospedagem PHP.',
                'preco' => 'A partir de US$ 0,00/mês'
            ],
            [
                'imagem' => 'https://static-00.iconduck.com/assets.00/laravel-icon-249x256-4gdjrenn.png',
                'nome' => 'Forja',
                'texto' => 'Gerenciamento de servidores para aplicativos no DigitalOcean, Vultr, Amazon, Hetzner e muito mais',
                'preco' => 'A partir de US$ 12,00/mês'
            ],
            [
                'imagem' => 'https://static-00.iconduck.com/assets.00/laravel-icon-497x512-uwybstke.png',
                'nome' => 'Vigília Noturna',
                'texto' => 'Monitoramento e insights incomparáveis sobre o desempenho do seu aplicativo Laravel.',
                'preco' => 'Preços em breve'
            ],
            [
                'imagem' => 'https://static-00.iconduck.com/assets.00/laravel-icon-249x256-4gdjrenn.png',
                'nome' => 'Nova',
                'texto' => 'A maneira mais simples e rápida de criar painéis de administração prontos para produção.',
                'preco' => 'A partir de $ 99,00'
            ]
        ];

        return view('home', ['crd'=>$cards]);
         
    }

    public function produtos(){
        $produtos = Produto::all();
        return view('produtos', ['prods' => $produtos]);
    }

    public function contato(Request $request){
        return view('contato');
    }

    public function enviarMensagem(Request $request){
        if ($request->isMethod('post')) {
            DB::table('contatos')->insert([
                'nome' => $request->nome,
                'email' => $request->email,
                'assunto' => $request->assunto,
                'mensagem' => $request->mensagem,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
            return redirect('contato')->with('success', 'Mensagem enviada com sucesso!');
        }
    }

    

    public function listaContatos(Request $request){
        return view('listaContatos', [
            'contatos' => DB::table('contatos')->get()
        ]);
    }
    
    public function excluirMensagem($id)
    {
        \DB::table('contatos')->where('id', $id)->delete();
        return redirect()->back()->with('success', 'Mensagem excluída com sucesso!');
    }

    public function frmproduto(){
        return view('frmproduto');
    }

    public function addproduto(Request $request){
        $prod = new Produto;

        $prod->nome = $request->nome;
        $prod->preco = $request->preco;
        $prod->quantidade = $request->quantidade;

        if($request->hasFile('imagem')){
            $path = $request->file('imagem')->store('imagens', 'public');
            $prod->imagem = $path;
        }

        $prod->save();

        return redirect('produtos');
    }

    public function listaProdutos() {
        $produtos = Produto::all();
        return view('listaProdutos', ['produtos' => $produtos]);
    }

    public function frmeditarproduto($id){
        $produto = Produto::findOrFail($id);
        return view('frmeditarproduto', ['produto' => $produto]);
    }

    public function atualizarProduto(Request $request, $id)
    {
        $produto = Produto::findOrFail($id);

        $produto->nome = $request->nome;
        $produto->preco = $request->preco;
        $produto->quantidade = $request->quantidade;

        if ($request->hasFile('imagem')) {
            $path = $request->file('imagem')->store('imagens', 'public');
            $produto->imagem = $path;
        }

        $produto->save();

        return redirect('produtos')->with('success', 'Produto atualizado com sucesso!');
    }

    public function excluirProduto($id)
    {
        Produto::destroy($id);
        return redirect()->back()->with('success', 'Produto excluído com sucesso!');
    }

    public function frmusuario(){
        return view('frmusuario');
    }

    public function addusuario(Request $request){
        $usuario = new Usuario();
        $usuario->nome = $request->fnome;
        $usuario->email = $request->femail;
        $usuario->senha = Hash::make($request->fsenha);
        $usuario->save();
        return redirect('dashboard');
    }

    public function usuarios(){
        $usuarios = Usuario::all();
        return view('usuarios',['users'=>$usuarios]);
    }

    public function frmeditarusuario($id){
        $usuario = Usuario::findOrFail($id);
        return view('frmeditarusuario',['user'=>$usuario]);
    }

    public function atualizarusuario(Request $request, $id){
        $usuario = Usuario::findOrFail($id);

        $dados = [
            'nome' => $request->fnome,
            'email' => $request->femail
        ];

        if(!empty($request->fsenha)){
            $dados['senha'] = Hash::make($request->fsenha);
        }
        
        $usuario->update($dados);

        return redirect('usuarios');
    }

    public function excluirusuario($id){
        $usuario = Usuario::findOrFail($id);
        $usuario->delete();
        if (session('usuario_id') == $id) {
            Session::flush();
            return redirect('/')->with('success', 'Sua conta foi excluída e você foi desconectado.');
        }

        return redirect('usuarios');
    }

    public function frmlogin(){
        return view('frmlogin');
    }

    public function logar(Request $request){
        $user = Usuario::where('email', $request->email)->first();
    
        if (!$user || !Hash::check($request->senha, $user->senha)) {
            return redirect('/frmlogin'); 
        }
    
        Session::put('usuario_id', $user->id);
        Session::put('usuario_nome', $user->nome);
    
        return view('dashboard');
    }

    public function dashboard() {
        if (!session()->has('usuario_id')) {
            return redirect('/frmlogin');
        }
        return view('dashboard');
    }

    public function logout() {
        Session::flush();
        return redirect('/');
    }

}