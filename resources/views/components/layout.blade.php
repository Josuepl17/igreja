<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title></title>
        <style>

        :root{
            --CorBase: #00042a;
            --CorBase2: #222326;
            --Corbase3: #034159;
            --Corbase4: #03030394;
        }

        :root {

            --titulos: #0a1727;
            --subtitulos: #012841;
            --fundos: #37383842;
            --cor-secundaria: #5353533d;
        }   

        body{
            padding: 0px;
            margin: 0px;
        }

        *{
            padding: 0;
            margin: 0;
        }

        #conteiner-geral{
            
            width: 100%;
            height:98vh;
            
        }

        #conteiner-nav{
           display: flex;
            background-color: var(--titulos);
            height: 08%;
            width: 100%;
            align-items: center;
            justify-content: space-between;
            border-bottom: 1px solid rgba(255, 255, 255, 0.271);
            border-top: 1px solid rgba(255, 255, 255, 0.314);
            
            
        }

        #conteiner-nav h1{
            color: white;
            margin-left: 15px;
        }

        #conteiner-nav p{
            color: white;
            margin-right: 15px;
        }

        #conteiner-menu{
            width: 16%;
            height: 100%;
        }

            /* Principal */
        #menu-subtable{
            display: flex;
            flex-direction: row ;
            width: 100%;
            height: 92%;
            
        }




        #conteiner-subtable{
            display: flex;
            justify-content: flex-end;
            align-items: center;
            width: 100%;
            height: 07%;
            background-color: var(--subtitulos);
            border-bottom: 1px solid rgba(255, 255, 255, 0.445);
            
        }

        #conteiner-menu{
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 250px;
            
            
        }
      .links-menu{
            display: flex;
            justify-content: center;
            align-items: center;
            text-decoration: none;
            border-bottom: 1px solid rgba(0, 0, 0, 0.211);
            width: 100%;
            height: 5%;
            color: black;  
        }



   .links-menu:hover{
           background-color: var(--subtitulos);
           color: white;
           transition: 0.4s;
        }

        #conteiner-menu h1{
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 16px;
            background-color: var(--titulos);
            color: white;
            height: 04%;
            width: 100%;
            border-bottom:1px solid black ;
        }

         /* Principal */

       #subtable-conteudo{
            width: 100%;
            height: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            background-color: var(--fundos);
            
        }

        #conteiner-conteudo{
            overflow: auto;
            height: 88%;
            width: 97%;
            margin-top: 0.5%;
            background-color: white;
            border-radius: 5px;
            background-color: var(--cor-secundaria);
           
            
        }
        

        /* Datas, Botoes e Imputes em cima da tabela */
        #conteiner-subtable form{
            display: flex;
            height: 100%;
            justify-content: flex-end;
            align-items: center; 
        }

        #conteiner-subtable form input{
            margin-right: 15px;
            font-size: 16px;
            border: 1px solid black;
            padding: 3px;
        }

        #conteiner-subtable a{
            margin-right: 15px;
        }


        #open-menu{
            display: none;
        }


        @media (max-width: 700px) {
            
            #open-menu {
            display: block;
            position: fixed;
            top: 08px;
            left: 20px;
            cursor: pointer;
            color: #fff;
            font-size: 24px;
        }

        #conteiner-menu {
            width: 250px;
            height: 100%;
            position: fixed;
            top: 0;
            left: -250px;
            transition: left 0.3s ease;
            background-color: var(--CorBase);
            
        }

        #conteiner-menu a {
            color: white;
            
        }

        #conteiner-menu h1{
            background-color: white;
            color: black;
            height: 7%;
        }

        #conteiner-nav h1{
            display: none;
            text-align: end;
        }

        #conteiner-nav{
            display: flex;
            justify-content: flex-end;
        }

    }

    </style>
    </head>
    <body>
        <div id="conteiner-geral">

            <nav id="conteiner-nav">
                <h1>Igreja Batista Fonte De Vida</h1>
                <p>Bem Vindo Josué !!</p>
            </nav> <!--conteiner-nav-->

            <div id="menu-subtable">
                <div id="conteiner-menu">
                    <h1>Menu Principal</h1>
                    <a class="links-menu" href="/">Home</a>
                    <a class="links-menu" href="/oferta">Cadastro Oferta</a>
                    <a class="links-menu" href="/despesas">Cadastro Despesas</a>
                    <a class="links-menu" href="/relatorio">Relatorios</a>
                    <a class="links-menu" href="/indexcaixa">Caixa</a>
                    <a class="links-menu" href="/user/profile">Usuarios</a>
                    <a class="links-menu" href="/cadastro/login/novo">Novo Usuario</a>
                    <a class="links-menu" href="/logout"><img  src="{{ asset('\sair.png') }}" alt="">&nbspLogout</a>
                    <div id="open-menu">&#9776;</div>
                </div> <!--Conteiner-menu-->

                <div id="subtable-conteudo">
                    <div id="conteiner-subtable">
                        @yield('botao-tabela')
                    </div> <!--conteiner-subtable-->
                    <div id="conteiner-conteudo">


                        @yield('conteudo')




                    </div> <!--conteiner-conteudo-->

                </div> <!--subtable-conteudo-->

            </div> <!--conteiner-nav-->

        </div> <!--menu-subtable-->
    </body>
    <script>
        const menu = document.querySelector('#conteiner-menu');
        const openMenuButton = document.getElementById('open-menu');

        openMenuButton.addEventListener('click', () => {
            menu.style.left = menu.style.left === '0px' ? '-250px' : '0px';
        });
    </script>
</html>