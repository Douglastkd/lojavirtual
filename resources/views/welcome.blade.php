@extends('corpo')


@section('conteudo')



<!------ BANNER -------------->    	
<div class="secao-banners">
    <div class="conteiner">
      <div id="smarthint-home-position1"></div>
      <div id="blank-home-position1"></div>
       <div class="row-fluid banner cheio">
            

      <div class="span12">
        <div class="flexslider">
      
      <ul class="slides">
          
          <li class="flex-active-slide" style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 1; display: block; z-index: 2;">
              <img src="/banner01.png" alt="banner full 01" draggable="false">
          </li>
          
          <li style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 0; display: block; z-index: 1;" class="">
              <img src="/banner02.png" alt="banner full 02" draggable="false">
          </li>
      </ul>
          <ol class="flex-control-nav flex-control-paging"><li><a class="flex-active">1</a></li><li><a class="">2</a></li><li><a class="">3</a></li></ol><ul class="flex-direction-nav"><li class="flex-nav-prev"><a class="flex-prev" href="/#">Previous</a></li><li class="flex-nav-next"><a class="flex-next" href="/#">Next</a></li></ul><ol class="flex-control-nav flex-control-paging"><li><a>1</a></li><li><a>2</a></li><li><a>3</a></li></ol><ul class="flex-direction-nav"><li class="flex-nav-prev"><a class="flex-prev" href="/#">Previous</a></li><li class="flex-nav-next"><a class="flex-next" href="/#">Next</a></li></ul><ol class="flex-control-nav flex-control-paging"><li><a>1</a></li><li><a>2</a></li><li><a>3</a></li></ol><ul class="flex-direction-nav"><li class="flex-nav-prev"><a class="flex-prev" href="/#">Previous</a></li><li class="flex-nav-next"><a class="flex-next" href="/#">Next</a></li></ul></div>
      </div>
    </div>	        
   
   <div class="row-fluid banner hidden-phone">
      <div class="span12 banner tarja">
          <img src="/banner03.png" alt="linha fio">
      </div> 
    </div>
   </div>
 </div>
<!-- FINAL BANNER -->




<div id="corpo">
    <div class="conteiner">
        <div class="secao-principal row-fluid sem-coluna">
            <div class="conteudo span12">
                
                <div class="row-fluid banner mini-banner hidden-phone">
                    <div id="smarthint-home-position3"></div>
                    <div id="blank-home-position3"></div>
                </div>
                
<div class="row-fluid ">

<!---------LISTAGEM PRODUTOS ---------->

    <div id="listagemProdutos" class="listagem borda-alpha ">
        <div class="titulo-categoria borda-principal cor-principal vitrine-lancamento">
            <strong>Lançamentos</strong>
        </div>

<ul data-produtos-linha="4" class="produtos-carrossel">
    <li class="listagem-linha flexslider"><div class="flex-viewport" style="overflow: hidden; position: relative;"></div><div class="flex-viewport" style="overflow: hidden; position: relative;"></div><div class="flex-viewport" style="overflow: hidden; position: relative;"><ul class="" style="width: 1200%;">
    
<!----- inicio produto----->
    <li style="width: 255px; float: left; display: block;">
        <div class="listagem-item prod-id-18302754  prod-cat-1708550 prod-cat-1708533 prod-cat-1708537 prod-cat-1708552">
            
            <a href="/produto" class="produto-sobrepor" title="#"></a>
                <div class="imagem-produto ">
                <img src="/produto.jpg" alt="" class="imagem-principal" draggable="false">
                </div>
            
    <div class="info-produto">
            <a href="/produto" class="nome-produto cor-secundaria">Pingente LV Ouro Rosa e Diamente </a>
            <div class="produto-sku hide">ZXH9PFXDK</div>
            <div data-trustvox-product-code="18302754" class="hide trustvox-stars"></div>
    <div>
         <div class="preco-produto destaque-avista ">
            <div>
              <span class="preco-a-partir">
                <span>A partir de</span>
                <strong class="preco-venda cor-principal ">R$8.500,00
                </strong>
              </span>
            </div>
      </div>
    </div>
  </div>


    <div class="acoes-produto hidden-phone">
      <a href="#LinkDoProduto" title="Ver detalhes do produto" class="botao botao-comprar principal">
        <i class="icon-search"></i>Ver mais
      </a>
    </div>
</div>
</li>
<!----- fim produto----->    

  </ul>
      <ul class="flex-direction-nav" style="width: 1200%;"><li class="flex-nav-prev" style="width: 255px; float: left; display: block;"><a class="flex-prev" href="#"></a></li><li class="flex-nav-next" style="width: 255px; float: left; display: block;"><a class="flex-next" href="#"></a></li></ul><ul class="flex-direction-nav" style="width: 1200%;"><li class="flex-nav-prev" style="width: 255px; float: left; display: block;"><a class="flex-prev" href="#"></a></li><li class="flex-nav-next" style="width: 255px; float: left; display: block;"><a class="flex-next" href="#"></a></li></ul></div><ul class="flex-direction-nav"><li class="flex-nav-prev"><a class="flex-prev" href="#"></a></li><li class="flex-nav-next"><a class="flex-next" href="#"></a></li></ul></li>
    </ul>
    
</div>
<!----- FIM LISTAGEM PRODUTO----->    

 
 <div id="smarthint-home-position3"></div>
        <div id="blank-home-position3"></div>
      </div>
  </div>
</div>

   <div class="secao-secundaria">
      <div id="smarthint-home-position4"></div>
      <div id="blank-home-position4"></div>
      </div>
    </div>
  </div>


@endsection