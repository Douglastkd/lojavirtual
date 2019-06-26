@extends('corpo')


@section('conteudo')

    <div id="corpo">
        <div class="conteiner">
            
    <div class="cadastro">
    <div class="cabecalho-interno row-fluid">
    <div class="span12">
        <h1 class="titulo cor-secundaria">Identificação <small>Faça o seu login ou crie uma conta caso ainda não possua cadastro</small> </h1>
    </div>
    </div>
    <div class="cadastro-logar row-fluid">
    <div class="span6">
        <div class="caixa-sombreada borda-principal">
        <form action="/painel" method="get" class="form-horizontal">
            
            <input type="hidden" name="next" id="next" value="conta_index">
            
            <fieldset>
            <legend class="titulo cor-secundaria borda-alpha"><i class="icon-user"></i>Já sou cadastrado</legend>
            <div class="control-group ">
                <label for="id_email" class="control-label">E-mail:</label>
                <div class="controls">
                <input class="span9" id="id_email" maxlength="128" name="email" type="text">
                
                </div>
            </div>
            <div class="control-group ">
                <label for="id_senha" class="control-label">Senha:</label>
                <div class="controls">
                <input id="id_senha" maxlength="32" name="password" type="password">
                <button type="submit" class="botao principal">Prosseguir</button>
                
                </div>
            </div>
            <a href="#modalRecuperarSenha" data-toggle="modal" data-target="#modalRecuperarSenha" class="recuperar-senha">
                <i class="icon-lock cor-secundaria"></i>
                Esqueceu a senha?
            </a>
            </fieldset>
        </form>
        </div>
    </div>
    <div class="span6">
        <div class="caixa-sombreada borda-principal">
        
        <form action="/criarconta" method="get">
            
            <input type="hidden" name="next" value="conta_index">
            
            <fieldset>
            <legend class="titulo cor-secundaria borda-alpha"><i class="icon-edit"></i>Ainda não possuo cadastro</legend>
            <label for="id_email">Digite o email que deseja cadastrar:</label>
            <div>
                
                <button type="submit" class="botao principal">Cadastrar</button>
            </div>
            </fieldset>
        </form>
        </div>
    </div>
    </div>
    </div>

    <div id="modalRecuperarSenha" class="modal hide">
    <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <span class="titulo cor-secundaria">Esqueceu sua senha?</span>
    </div>
    <div class="modal-body borda-principal">
    <div id="respostaMensagem" class="alert hide">
    </div>
    <div class="conteudoRecuperarSenha">
        <p>
        Para recuperar sua senha é simples! Informe seu e-mail no campo abaixo e receba ela por email.
        </p>
        <form action="" method="" class="form-inline">
        <label for="id_email_recuperar_senha"><strong>Informe seu e-mail:</strong></label>
        <input type="email" name="email" id="id_email_recuperar_senha">
        </form>
    </div>
    </div>
    <div class="modal-footer">
    
        <a href="#" data-dismiss="modal" class="botao">Fechar</a>
    
    <button class="botao principal" id="btnRecuperarSenha">Enviar dados</button>
    </div>
    </div>


        <div class="secao-secundaria">
            
            
        </div>
        </div>
    </div>


@endsection