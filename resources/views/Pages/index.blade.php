<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard admin main</title>
    <link rel="icon" href="../Recursos/imagenes/logo-1.png" type="image/png">
    <!--Hojas de estilo-->
    <link rel="stylesheet" href="{{asset ('css/dashboard.css')}}">
   
   
   <!--Icons cdn-->
    
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   

    <!--Script cdn-->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

</head>

<body>
    <div class="loader-wrapper">
        <div class="loader"></div>
    </div>
    <section id="menu">
       <div class="logo">
           <img src="../Recursos/imagenes/intento_2-transformed-removebg-preview (1).png" alt="Logo del software">
            <h2>Admin<span>istrador</span></h2>
       </div>

       <div class="items"> <!-- Nav links and icons-->
       
        <li class="dashboard-link"><i class='bx bxs-dashboard' ></i><a href="{{route('dashboard')}}"> Dashboard</a></li>
        <a class="ventas_link"href="{{route('ventas')}}"><li><i class="fa-solid fa-sack-dollar"></i>Ventas</li></a>
        <a class="ventas_link" href="{{route('clientes')}}"><li><i class="fa-solid fa-hand-holding-dollar"></i>  Clientes</li></a>
        <li><i class="fa-solid fa-boxes-stacked"></i> <a href="#"> Inventario</a></li>
        <a class="ventas_link"href="{{route('estadisticas')}}"><li><i class="fa-solid fa-chart-line"></i>Estadisticas</li></a>
        <a class="ventas_link"href="{{route('proveedores')}}"><li><i class="fa-solid fa-truck"></i>Proveedores</li></a>
       
        
        <div class="settings">  
            <!--Previously this code block was outside the "items" div, 
            but it was problematic-->
            <a class="ventas_link" href="{{route('configuracion')}}"><li><i class='bx bxs-cog'></i>
                Configuración</li></a>
        

        </div>

       
       
        <div class="support">
            <a  class="ventas_link" href="{{route('soporte')}}"><li><i class="fa-solid fa-envelope"></i>
                 Soporte</li></a>
            
        </div>  <!--Final closing div for settings and support-->


       </div>
      
       <footer>
        <p class="tex-footer">© ComercioControl</p>
       </footer>

  
    </section>



    
    <section id="interface">
        <div class="navigation">
            <div class="n1">
                <div>
                    <i id="menu-btn" class="fa-solid fa-bars"></i>
                </div>
                <div class="search">
                    <form action="resultados_busqueda.php" method="GET">
                        <i class="bi bi-search"></i>
                        <input type="text" name="consulta" placeholder="Buscar">
                        <button class="submit-btn"type="submit">
                            <i class="fas fa-search"></i>
                        </button>                        
                    </form>
                </div>

            </div>
            <div class="profile1">
            
            <div class="profile dropdown">
                <a  role="button" data-bs-toggle="dropdown" aria-expanded="false"><img src="../Recursos/imagenes/pexels-pavel-danilyuk-8000607.jpg"alt=""></a>

                <ul class="dropdown-menu" >
                    <li><a class="dropdown-item" href="#">Mensajes</a></li>
                    <li><a class="dropdown-item" href="{{route('editar-perfil')}}">Editar Perfil</a></li>
                    <li><form method="GET" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="dropdown-item">Cerrar sesión</button>
                    </form>
                    </li>
                  </ul>
            </div>
        </div>
   

        </div>
       
        
        <h3 class="i-name">
            Dashboard
        </h3>

        <div class="values">
            <div class="val-box">
                <i class="fas fa-users"></i>
                
                <div>
                
                <h3> 185</h3>
                <span>Clientes</span>
                </div>


            </div>

            <div class="val-box">
                <i class="fa-solid fa-piggy-bank"></i>
                <div>
                
                <h3> 8,987,321</h3>
                <span>Ingresos</span>
                </div>


            </div>

            <div class="val-box">
                <i class='bx bxs-cart'></i>
                
                <div>
                
                <h3> 890</h3>
                <span>Ordenes totales</span>
                </div>


            </div>

            <div class="val-box">
                <i class="fa-solid fa-helmet-safety"></i>
                
                <div>
                
                <h3> 8</h3>
                <span>Proveedores</span>
                </div>


            </div>

           






        </div>


        <!--Inicio de la tabla-->

        <div class="board">
            <table width="100%">
                <thead>
                    <tr>
                    
                        <td>Nombre</td>
                        <td>ID</td>
                        <td>Rol</td>
                         <td>Dirección</td>
                        <td>Contacto</td>
                        <td>Status</td>
                        <td></td>
                    
                     </tr>
                    
                </thead>
                <tbody>
                    <tr>
                


                    <td class="people">
                        <img src="../Recursos/imagenes/alegre-chica-negocios-rizada-gafas.jpg" alt="">
                        <div class="people-de">
                            <h5>Gaspar Salazar</h5>
                            <p>Gasparsal@gmail.com</p>
                        

                        </div>
                    </td>

                    <td class="people-id ">
                
                           
                            <h5>423464</h5>
                           
                      
                    </td>

                    <td class="people-des">
                            <h5>Vendedor</h5>
                                

                       
                    </td>

                    <td class="people-adress">
                        <h5>calle 55a #89a-11</h5>
                        
            
                    
                </td>


                    <td class="people-contact">
                        <h5>311 8904422</h5>
                        
                    

                    
                </td>

                <td class="people-status">
                    <p>Activo</p>
                    
                

               
            </td>

            <td class="edit">
                <a href="#">Edit</a>
                
            

            
        </td>




                    
                    </tr>
                    <tr>
                


                        <td class="people">
                            <img src="../Recursos/imagenes/alegre-chica-negocios-rizada-gafas.jpg" alt="">
                            <div class="people-de">
                                <h5>Gaspar Salazar</h5>
                                <p>Gasparsal@gmail.com</p>
                            
    
                            </div>
                        </td>
    
                        <td class="people-id ">
                    
                               
                                <h5>423464</h5>
                               
                          
                        </td>
    
                        <td class="people-des">
                                <h5>Vendedor</h5>
                                    
    
                           
                        </td>
    
                        <td class="people-adress">
                            <h5>calle 55a #89a-11</h5>
                            
                
                        
                    </td>
    
    
                        <td class="people-contact">
                            <h5>311 8904422</h5>
                            
                        
    
                        
                    </td>
    
                    <td class="people-status">
                        <p>Activo</p>
                        
                    
    
                   
                </td>
    
                <td class="edit">
                    <a href="#">Edit</a>
                    
                
    
                
            </td>
    
    
    
    
                        
                        </tr><tr>
                


                            <td class="people">
                                <img src="../Recursos/imagenes/alegre-chica-negocios-rizada-gafas.jpg" alt="">
                                <div class="people-de">
                                    <h5>Gaspar Salazar</h5>
                                    <p>Gasparsal@gmail.com</p>
                                
        
                                </div>
                            </td>
        
                            <td class="people-id ">
                        
                                   
                                    <h5>423464</h5>
                                   
                              
                            </td>
        
                            <td class="people-des">
                                    <h5>Vendedor</h5>
                                        
        
                               
                            </td>
        
                            <td class="people-adress">
                                <h5>calle 55a #89a-11</h5>
                                
                    
                            
                        </td>
        
        
                            <td class="people-contact">
                                <h5>311 8904422</h5>
                                
                            
        
                            
                        </td>
        
                        <td class="people-status">
                            <p>Activo</p>
                            
                        
        
                       
                    </td>
        
                    <td class="edit">
                        <a href="#">Edit</a>
                        
                    
        
                    
                </td>
        
        
        
        
                            
                            </tr><tr>
                


                                <td class="people">
                                    <img src="../Recursos/imagenes/alegre-chica-negocios-rizada-gafas.jpg" alt="">
                                    <div class="people-de">
                                        <h5>Gaspar Salazar</h5>
                                        <p>Gasparsal@gmail.com</p>
                                    
            
                                    </div>
                                </td>
            
                                <td class="people-id ">
                            
                                       
                                        <h5>423464</h5>
                                       
                                  
                                </td>
            
                                <td class="people-des">
                                        <h5>Vendedor</h5>
                                            
            
                                   
                                </td>
            
                                <td class="people-adress">
                                    <h5>calle 55a #89a-11</h5>
                                    
                        
                                
                            </td>
            
            
                                <td class="people-contact">
                                    <h5>311 8904422</h5>
                                    
                                
            
                                
                            </td>
            
                            <td class="people-status">
                                <p>Activo</p>
                                
                            
            
                           
                        </td>
            
                        <td class="edit">
                            <a href="#">Edit</a>
                            
                        
            
                        
                    </td>
            
            
            
            
                                
                                </tr><tr>
                


                                    <td class="people">
                                        <img src="../Recursos/imagenes/alegre-chica-negocios-rizada-gafas.jpg" alt="">
                                        <div class="people-de">
                                            <h5>Gaspar Salazar</h5>
                                            <p>Gasparsal@gmail.com</p>
                                        
                
                                        </div>
                                    </td>
                
                                    <td class="people-id ">
                                
                                           
                                            <h5>423464</h5>
                                           
                                      
                                    </td>
                
                                    <td class="people-des">
                                            <h5>Vendedor</h5>
                                                
                
                                       
                                    </td>
                
                                    <td class="people-adress">
                                        <h5>calle 55a #89a-11</h5>
                                        
                            
                                    
                                </td>
                
                
                                    <td class="people-contact">
                                        <h5>311 8904422</h5>
                                        
                                    
                
                                    
                                </td>
                
                                <td class="people-status">
                                    <p>Activo</p>
                                    
                                
                
                               
                            </td>
                
                            <td class="edit">
                                <a href="#">Edit</a>
                                
                            
                
                            
                        </td>
                
                
                
                
                                    
                                    </tr>

                </tbody>

            </table>


        </div>
             <!--Fin tabla estructura y fila uno-->
    

        <!--aqui habia un div cerrado-->

        <script>
            $("#menu-btn").click(function(){
                $("#menu").toggleClass("active");
            })
        </script>  <!--animate burguer btn in small screens-->

    </section>
<script src="{{asset('js/dashboard.js')}}"></script>
</body>
</html>