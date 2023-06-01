@extends('layouts.site')
@section('conteudo')
        <div class="lista-categorias">
            <ul>
                <li>
                    <div class="item-categoria">
                        <i class="icon-hambuger"></i>
                        <h2>Lanches</h2>
                    </div>
                </li>

                <li>
                    <div class="item-categoria">
                        <i class="icon-batata_frita"></i>
                        <h2>Porções</h2>
                    </div>
                </li>
                <li>
                    <div class="item-categoria">
                        <i class="icon-pizza"></i>
                        <h2>Pizzas</h2>
                    </div>
                </li>
                <li>
                    <div class="item-categoria">
                        <i class="icon-choppe"></i>
                        <h2>Chopps</h2>
                    </div>
                </li>
                <li>
                    <div class="item-categoria">
                        <i class="icon-suco"></i>
                        <h2>Sucos</h2>
                    </div>
                </li>
            </ul>
        </div>

        <div class="lista-produtos">
            <div class="item-produto">
                <img src="img/lanches/hamburguer-teste.jpg" alt="Lanche" class="img-fluid">
                <h2>X-Bacon</h2>
                <small>Pão, hambúrguer 100g, bacon crocante,cheddar e...</small>
                <div class="box-preco">
                    <span class="preco">R$19,90</span>
                    <a href="hamburguer.html" class="btn-adicionar">
                        <img src="img/exports/btn-add.svg" alt="adicionar" height="20">
                    </a>
                </div>
            </div>

            <div class="item-produto">
                <img src="img/lanches/hamburguer-1.jpg" alt="Lanche" class="img-fluid">
                <h2>X-Bacon</h2>
                <small>Pão, hambúrguer 100g, bacon crocante,cheddar e...</small>
                <div class="box-preco">
                    <span class="preco">R$19,90</span>
                    <a href="#" class="btn-adicionar">
                        <img src="img/exports/btn-add.svg" alt="adicionar" height="20">
                    </a>
                </div>
            </div>

            <div class="item-produto">
                <img src="img/lanches/hamburguer-2.jpg" alt="Lanche" class="img-fluid">
                <h2>X-Bacon</h2>
                <small>Pão, hambúrguer 100g, bacon crocante,cheddar e...</small>
                <div class="box-preco">
                    <span class="preco">R$19,90</span>
                    <a href="#" class="btn-adicionar">
                        <img src="img/exports/btn-add.svg" alt="adicionar" height="20">
                    </a>
                </div>
            </div>

            <div class="item-produto">
                <img src="img/lanches/hamburguer-2.jpg" alt="Lanche" class="img-fluid">
                <h2>X-Bacon</h2>
                <small>Pão, hambúrguer 100g, bacon crocante,cheddar e...</small>
                <div class="box-preco">
                    <span class="preco">R$19,90</span>
                    <a href="#" class="btn-adicionar">
                        <img src="img/exports/btn-add.svg" alt="adicionar" height="20">
                    </a>
                </div>
            </div>
        </div>
@endsection
