@extends('corpo')


@section('conteudo')



<div id="corpo">
        <div id="corpo">
           <div class="conteiner">
             
   
             
   
             
     <div class="cadastro" id="formCadastroCompleto">
       <div class="cabecalho-interno row-fluid">
         <div class="span12">
           <h1 class="titulo cor-secundaria">
             Identificação <small>Faça o seu login ou crie uma conta caso ainda não possua cadastro</small>
           </h1>
         </div>
       </div>
       
   
   
   <script>
     $(document).ready(function() {
       esconder_pais = function(lista) {
         $(lista).each(function(i, e) {
           $(e).parent().parent().slideUp();
         });
       };
   
       mostrar_pais = function(lista) {
         $(lista).each(function(i, e) {
           $(e).parent().parent().slideDown();
         });
       };
   
       $('#formCadastroCompleto input[name=tipo]').change(function() {
         var self = $(this);
         var tipo = $('#formCadastroCompleto input[name=tipo]:checked').val();
         if (tipo == 'PF') {
           lista_esconder = ['#id_cnpj', '#id_ie', '#id_ie_isento', '#id_razao_social', '#id_telefone_comercial'];
           lista_mostrar = ['#id_cpf', '#id_nome', '#id_data_nascimento', '#id_sexo'];
         } else if (tipo == 'PJ') {
           lista_esconder = ['#id_cpf', '#id_data_nascimento', '#id_sexo', '#id_telefone_comercial'];
           lista_mostrar = ['#id_cnpj', '#id_ie', '#id_ie_isento', '#id_razao_social', '#id_nome'];
         } else {
           lista_esconder = ['#id_cpf', '#id_cnpj', '#id_ie', '#id_ie_isento', '#id_razao_social'];
           lista_mostrar = ['#id_nome'];
         }
         esconder_pais(lista_esconder);
         mostrar_pais(lista_mostrar);
       }).change();
   
       if ($('#id_email').val() && !$('#id_confirmacao_email').val()) {
         $('#id_confirmacao_email').focus();
       };
   
       $('.formulario-cadastro-cliente').submit(function() {
         var campoVazio = true;
         $('.formulario-cadastro-cliente .control-group.required .controls input').each(function() {
           if ($('#formCadastroCompleto input[name=tipo]:checked').val() == 'PJ') {
             if ($(this).attr('name') == 'cpf' || $(this).attr('name') == 'data_nascimento') {
               return;
             }
           } else {
             if ($(this).attr('name') == 'cnpj' || $(this).attr('name') == 'razao_social') {
               return;
             }
           }
           if (this.value === "") {
             campoVazio = false;
             $(this).focus();
             $(this).parent().parent().addClass('erro error');
           } else {
             $(this).parent().parent().removeClass('erro error');
           }
         });
         if ($(".formulario-cadastro-cliente .control-group.required #id_sexo").val() === "" && $('#formCadastroCompleto input[name=tipo]:checked').val() !== 'PJ') {
           campoVazio = false;
           $(".formulario-cadastro-cliente .control-group.required #id_sexo").parent().parent().addClass('erro error');
         } else {
           $(".formulario-cadastro-cliente .control-group.required #id_sexo").parent().parent().removeClass('erro error');
         }
         return campoVazio
       });
     });
   </script>
   
   <form action="" method="post" class="formulario-cadastro-cliente">
     
       <input type="hidden" name="next" value="conta_index">
     
     <div class="dados-acesso row-fluid">
       <div class="span12">
         <div class="caixa-sombreada borda-principal">
           <fieldset>
             <legend class="titulo cor-secundaria borda-alpha"><i class="icon-user"></i>Dados para acesso</legend>
             <div class="row-fluid cor-principal">
               <div class="control-group span12 ">
                 <label for="id_email" class="control-label"><i class="icon-group"></i>Nome Completo</label>
                 <div class="controls">
                   <input id="id_email" maxlength="128" name="email" placeholder="Digite o seu email" type="text" value="tkd.dodo@gmail.com" class="input-block-level">
                   
                 </div>
               </div>
   </div>
   
   
   <div class="row-fluid cor-principal">
               <div class="control-group span6 ">
                 <label for="id_email" class="control-label"><i class="icon-envelope"></i> E-mail</label>
                 <div class="controls">
                   <input id="id_email" maxlength="128" name="email" placeholder="Digite o seu email" type="text" value="tkd.dodo@gmail.com" class="input-block-level">
                   
                 </div>
               </div>
               <div class="control-group span6 ">
                 <label for="id_confirmacao_email" class="control-label">
                   Confirmar e-mail
                 </label>
                 <input class="input-block-level" id="id_confirmacao_email" maxlength="128" name="confirmacao_email" type="text">
                 
               </div>
             </div>
             <br>
             <div class="row-fluid cor-principal">
               <div class="control-group span6 ">
                 <label for="id_senha" class="control-label"><i class="icon-lock" style="margin: 0 1px 0 2px;"></i> Crie uma senha</label>
                 <input class="input-block-level" id="id_senha" maxlength="32" name="senha" type="password">
                 
               </div>
               <div class="control-group span6 ">
                 <label for="id_confirmacao_senha" class="control-label">Confirmar senha</label>
                 <input class="input-block-level" id="id_confirmacao_senha" maxlength="32" name="confirmacao_senha" type="password">
                 
               </div>
             </div>
           </fieldset>
         </div>
       </div>
     </div>
   
     <div class="tipo-cadastro row-fluid">
       
     </div>
   
     
   
     <div class="acao-editar row-fluid">
       <div class="span3 offset9">
         <a href="javascript:window.history.back();" class="botao">Cancelar</a>
         <button type="submit" class="botao principal">Criar Conta</button>
       </div>
     </div>
   </form>
   
     </div>
   
   
             <div class="secao-secundaria">
               
               
             </div>
           </div>
         </div>

@endsection