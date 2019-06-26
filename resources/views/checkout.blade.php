@extends('corpo')

@section('conteudo')



<div id="corpo">
        
<div class="conteiner">
<div class="secao-principal row-fluid sem-coluna">

  <div class="campos-pedido">
    <div class="cabecalho-interno row-fluid hide">
      <div class="span12">
        <h1 class="titulo cor-secundaria">
          Finalizar compra <small> Preencha os dados necessários para finalizar o pedido.</small>
        </h1>
      </div>
    </div>
    <div class="campos-pedido">
      

      <div class="row-fluid">
        
      </div>
      

      
        <div class="row-fluid hide" style="display: block;">

          <div class="span7">
                <form action="/concluido" method="POST" id="formularioCheckout">
                <div class="caixa-sombreada borda-principal dados-cadastro">
                        <fieldset data-recording-ignore="events">
                          
                          <legend class="titulo cor-secundaria"><i class="icon-list"></i>Pagar com Cartão </legend>
              
                            <div class="control-group  required">
                              <label class="control-label font-bold" for="id_email">Nome do Titular</label>
                              <div class="controls">
                                <input class="input-xlarge span12"  maxlength="128" name="nome" type="text">
                                  <p class="help-block hide">
                                  </p>
                              </div>
                            </div>
          
                            <div class="row-fluid">
                              <div class="control-group span6  required erro error">
                                <label class="control-label font-bold">Número do Cartão</label>
                                <div class="controls">
                                  <input class="input-small span12" name="numero" type="text">
                                  <p class="help-block hide">
                                </div>
                              </div>
                              
          
                              <div class="control-group span6  required">
                                <label class="control-label font-bold" for="id_confirmacao_senha">Código de Segurança (CCV)</label>
                                <div class="controls">
                                  <input class="input-small span12"  maxlength="32" name="ccv" type="password">
                                  <p class="help-block hide">
                                  </p>
                                </div>
                              </div>             </div>
                              <div class="row-fluid">
                              <div class="control-group span6 required">
                                      <label class="control-label font-bold" for="id_confirmacao_senha">Mês Validade</label>
                                      <div class="controls">
                                              <select id="expiration-month" class="input-small span12" name="mes" required="required"><option value="" selected="selected">Selecionar</option><option value="1">Janeiro</option><option value="2">Fevereiro</option><option value="3">Março</option><option value="4">Abril</option><option value="5">Maio</option><option value="6">Junho</option><option value="7">Julho</option><option value="8">Agosto</option><option value="9">Setembro</option><option value="10">Outubro</option><option value="11">Novembro</option><option value="12">Dezembro</option></select>
                                        <p class="help-block hide">
                                        </p>
                                      </div>
                                    </div>
                            
          
                                  <div class="control-group span6  required">
                                          <label class="control-label font-bold" for="id_confirmacao_senha">Ano Validade</label>
                                          <div class="controls">
                                                  <select  class="input-small span12" id="expiration-year" name="ano" required="">
                                                          <option value="">Selecionar</option>
                                                          <option value="19">2019</option><option value="20">2020</option><option value="21">2021</option><option value="22">2022</option><option value="23">2023</option><option value="24">2024</option><option value="25">2025</option><option value="26">2026</option><option value="27">2027</option><option value="28">2028</option><option value="29">2029</option>   
                                                          <option value="30">2030</option>  
                                                          <option value="31">2031</option>  
                                                          <option value="32">2032</option>  
                                                          <option value="33">2033</option>  
                                                          <option value="34">2034</option>  
                                                                                       </select> 
                                            </p>
                                          </div>
                                        </div>
                                      </div>
          
                                        <div class="control-group  required">
                                              <label class="control-label font-bold" for="id_email">Nº de Parcelas</label>
                                              <div class="controls">
                                                      <select class="input-small span12" id="payment-options" name="parcelas" required="">
                                                          
          
                                                              <option value="1">1x de R$ 54,70 </option>
          
                                                          </select> <p class="help-block hide">
                                                  </p>
                                              </div>
                                            </div>
          
                                            <div class="acao-editar" style="text-align: center;">
                                                  <button type="submit" id="finalizarCompra" class="botao principal grande disabled" data-loading-text="<i class='icon-refresh icon-animate'></i> Finalizando..." autocomplete="off" readonly="readonly"><i class="icon-ok"></i>Finalizar compra no cartão</button>
                                            </div>
                                      </div>
                                    </form>   
            <br>
        <form action="" method="POST" id="formularioCheckout">
                <div class="caixa-sombreada borda-principal dados-cadastro">
                        <fieldset data-recording-ignore="events">
                          
                          <legend class="titulo cor-secundaria"><i class="icon-list"></i>Pagar com Boleto </legend>
                                            <div class="acao-editar" style="text-align: center;">
                                                  <button type="submit" id="finalizarCompra" class="botao principal grande disabled" data-loading-text="<i class='icon-refresh icon-animate'></i> Finalizando..." autocomplete="off" readonly="readonly"><i class="icon-ok"></i>Gerar Boleto</button>
                                            </div>
                          </div>

              </fieldset>
            </div>
        </form>
 
          <div class="span5">
            <div class="caixa-sombreada borda-principal" id="formas-pagamento-wrapper">
              <fieldset data-recording-ignore="events">
                <legend class="titulo cor-secundaria"><i class="icon-money"></i>Resumo de sua Compra</legend>
                
                <div class="span6">
            <h6>Produto tal... 1x  R$ 4,50</h6>
            <h6>Produto tal... 1x  R$ 4,50</h6>
            <h6>Produto tal... 1x  R$ 4,50</h6>
            <h6>Produto tal... 1x  R$ 4,50</h6>
            <h6>Produto tal... 1x  R$ 4,50</h6>
            <h6>Produto tal... 1x  R$ 4,50</h6>
            <h6>Produto tal... 1x  R$ 4,50</h6>
            <h6>Produto tal... 1x  R$ 4,50</h6>
            <h6>Produto tal... 1x  R$ 4,50</h6>
            </div>
            <p>Valor Total</p>
            <H1>R$ 1.500<h1>
              </fieldset>
            </div>
          </div>
        </div>

    </div>
  </div>
</div>
          

          <div class="secao-secundaria">
            
          </div>
        </div>
      </div>

      @endsection