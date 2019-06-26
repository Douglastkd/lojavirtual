@extends('corpo')


@section('conteudo')


<div id="corpo">
        
	<div class="conteiner">
            <div class="secao-principal row-fluid sem-coluna"> 
			<div class="span12 produto" itemscope="itemscope" itemtype="http://schema.org/Product">
			<div class="row-fluid">
			 
			 <div class="span6">
				<div class="conteiner-imagem">
				  <div>
					  <a href="/produto01.jpg" title="Ver imagem grande do produto" id="abreZoom" style="display: none;"><i class="icon-zoom-in"></i></a>
					  <img src="/produto01.jpg" alt="Pingente LV Ouro Rosa e Diamente " id="imagemProduto" itemprop="image">
				  </div>
				</div>
			  </div>
			  
			<div class="span6">
				<div class="principal">
				<div class="info-principal-produto">
					
					<div class="breadcrumbs borda-alpha ">
					  <ul>
						  <li>
							<a href="/"><i class="fa fa-folder"></i>Início</a>
						  </li>
						  <li>
							<a href="#LinkCategoria">Categoria</a>
						  </li>
					  </ul>
					</div>

			<h1 class="nome-produto titulo cor-secundaria" itemprop="name">Pingente LV Ouro Rosa e Diamente </h1>
			
            <div class="codigo-produto">
              <span class="cor-secundaria">
                <b>Código: </b> <span itemprop="sku">ZXH9PFXDK</span>
              </span>
              
                <span class="cor-secundaria pull-right" itemprop="brand" itemscope="itemscope" itemtype="http://schema.org/Brand">
                  <b>Marca: </b>
                  <a href="marca/rolex.html" itemprop="url">Rolex</a>
                  <meta itemprop="name" content="Rolex">
                </span>
              
            </div>
          </div>
				  
		  
  <div class="atributos">
  <h1>R$ 1.500</h1>
        <div class="atributo-comum">
          <span>
             Descrição do produto Resumo...Descrição do produto Resumo...Descrição do produto Resumo...Descrição do produto Resumo...
          </span>
      </div>
  </div>


	
    <div class="comprar">
        
        <form name="formulario">  
            <button type="submit" class="botao botao-comprar principal grande" rel="nofollow" data-placement="left">
              <i class="icon-shopping-cart"> COMPRAR</i></button>
          </form>
          <span class="cor-secundaria disponibilidade-produto">
            
              Estoque:
              <b class="cor-principal">
                Disponível
              </b>
            
          </span>
        
      </div>
</div>   
	  <span id="DelimiterFloat"></span>
        </div>
      </div>
    </div>

    
      <div class="row-fluid">
        <div class="span12">
          <div id="smarthint-product-position1"></div>
          <div id="blank-product-position1"></div>
          <div class="abas-custom">
            <div class="tab-content">
              <div class="tab-pane active" id="descricao" itemprop="description">
                <p>Descrição...Descrição...Descrição...Descrição...Descrição...Descrição...</p>

              </div>
            </div>
          </div>
        </div>
      </div>
    
  </div>
</div>
</div>


    
@endsection