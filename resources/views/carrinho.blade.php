@extends('corpo')


@section('conteudo')


<div id="corpo">
        <div class="conteiner">
            <div class="secao-principal row-fluid sem-coluna">
  
    <div class="finalizar-compra">
      <div class="cabecalho-interno row-fluid">
        <div class="span12">
          
            <h1 class="titulo cor-secundaria">
              Carrinho <small> Clique em finalizar compra para efetuar o seu pedido.</small>
            </h1>
          
        </div>
      </div>
      <div class="caixa-sombreada">
        <table class="table tabela-carrinho border-alpha">
          <thead>
            <tr><th colspan="2" width="45%">
              <h6 class="cor-secundaria">Produto</h6>
            </th>
            
              <th width="15%">
                <h6 class="cor-secundaria">Preço unitário</h6>
              </th>
            
            <th width="15%">
              <h6 class="cor-secundaria">Quantidade</h6>
            </th>
            
              <th width="15%">
                <h6 class="cor-secundaria">Subtotal</h6>
              </th>
            
            <th width="10%">
              <h6 class="cor-secundaria">Excluir</h6>
            </th>
          </tr></thead>
          
            <tbody>
<!-- PRODUTO ------------------------>			
			
			<tr data-produto-id="18042812" data-produto-quantidade="1">
              <td class="sem-borda conteiner-imagem">
                <div class="imagem">
                    <a href="#linkProduto">
                    <img src="https://cdn.awsli.com.br/64x64/485/485874/produto/18042812/800178f1cd.jpg" alt="Oculos de Sol LV Enigme gm"></a>
                </div>
              </td>
             
			 <td class="sem-borda">
                <div class="produto-info">
                  <a href="#LinkdoProduto" class="cor-secundaria">
                    Oculos de Sol LV Enigme gm
                  </a>
                </div>
              </td>
              
			  <td class="hidden-phone">
					<div class="preco-produto destaque-parcela com-promocao">
					
					  <div>
						<strong class="preco-promocional cor-principal ">
						  R$ 5.500,00
						</strong>
					  </div>
					</div>	
			  </td>
              
              <td class="clearfix">
                  <div class="quantidade">
                    <a href="" class="cor-secundaria icon-minus"></a>
					<!-- Quantidade -->
                    <input type="text" class="input-mini" name="quantidade" value="1" autocomplete="off">
					<!-- FIM quantidade -->
                    <a href="" class="cor-secundaria icon-plus"></a>
                    <button class="botao principal pequeno atualizar-quantidade">Atualizar quantidade</button>
                  </div>
                </form>
              </td>
              
                <td>
                  <div class="preco-produto">
                    <strong class="preco-promocional cor-principal titulo">
                      R$ 5.500,00
                    </strong>
                  </div>
                </td>
              
              <td>
                <div class="excluir">
                  <a href="" class="icon-trash cor-secundaria"></a>
                </div>
              </td>
            </tr>
          
<!-- Final Produto ------------------------>				  

          
            <tr class="bg-dark">
            </tr>
          
            <tr class="bg-dark">
              <td colspan="6" class="line-18">
                <div class="total">
                  <span>Total:</span>
                  <strong class="titulo cor-principal valor-total" data-total-valor="5500">R$ 5.500,00</strong>
                </div>
              </td>
            </tr>
          
        </tbody></table>
      </div>

      <form action="/checkout" method="post">
        <div class="acao-editar row-fluid">
              <a href="/" class="botao">Continuar comprando</a>
                <button class="botao principal grande"><i class="icon-ok"></i>Finalizar compra</button>
         </div>
        
		<div class="selo-ssl hidden-phone">
             <img src="https://cdn.awsli.com.br/production/static/img/struct/stamp_encryptssl_cart.png" alt="Compra 100% Segura">
         </div>
        </div>
      </form>
    </div> 
    </div>
    <div class="secao-secundaria">
            
            
          </div>
        </div>
      </div>


@endsection