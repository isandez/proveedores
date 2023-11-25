<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ventas-Facturación</title>
    <link rel="icon" href="../Recursos/imagenes/logo-1.png" type="image/png">
     <!--Vinculacion con la hoja de estilo-->
    <link rel="stylesheet" href="{{asset('css/app2.css')}}">
     <!--Icons-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">

    <!--SCRIPT-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
        
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>



</head>
<body>
    <section id="interface">
        <section id="menu" >
            <div class="menu-flex">
                        
            <div class="logo">
                <img src="../Recursos/imagenes/intento_2-transformed-removebg-preview (1).png " alt="Logo del software">
                 <h2 class="titulo-menu">Admin<span>istrador</span></h2>
            </div>
     
            <div class="items"> <!-- Nav links and icons--> 
            
             <a class="ventas_link"href="../Dashboard/index.html"><li><i class="bx bxs-dashboard"></i>Dashboard</li></a>
             <a class="ventas_link"href="../interfaz ventas/Interfaz-ventas.html"><li><i class="fa-solid fa-sack-dollar"></i>Ventas</li></a>
             <a class="ventas_link"href="../Clientes - copia/index.html"><li><i class="fa-solid fa-hand-holding-dollar"></i>  Clientes</li></a>
             <li><i class="fa-solid fa-boxes-stacked"></i> <a href="#"> Inventario</a></li>
             <a class="ventas_link"href="../Estadisticas/index.html"><li><i class="fa-solid fa-chart-line"></i>Estadisticas</li></a>
             <a class="ventas_link" href="../dash/proveedores.html"><li><i class="fa-solid fa-truck"></i>  Proveedores</li></a>
            
             
             <div class="settings">  
                <!--Previously this code block was outside the "items" div, 
                but it was problematic-->
                <a class="ventas_link" href="../configuración/index.html"><li><i class='bx bxs-cog'></i>
                     Configuración</li></a>
            
    
            </div>
     
            
            
             <div class="support">
                <a class="ventas_link" href="../dash/soporte.html"><li><i class="fa-solid fa-envelope"></i>
                    Soporte</li></a>
                 
             </div>  <!--Final closing div for settings and support-->
     
     
            </div>
           
            <footer>
             <p class="tex-footer">© ComercioControl</p>
            </footer>
         </section>
            </div>

         <div class="container-nav-table">
            <div class="child-contenido">
                <div class="navigation">
                    <div class="n1">
                        <div>
                            <i id="menu-btn" class="fa-solid fa-bars"></i>
                        </div>
                        <div class="search">
                            <i class="bi bi-search"></i>
                            <input type="text" placeholder="Buscar">
                        </div>
        
                    </div>
        
                    <div class="profile">
                        <i class="bi bi-bell-fill"></i>
                        <div class="profile dropdown"></div>
                        <a  role="button" data-bs-toggle="dropdown" aria-expanded="false"><img src="../Recursos/pexels-pavel-danilyuk-8000607.jpg" alt="Foto de perfil"></a>
                            <ul class="dropdown-menu" >
                                <li><a class="dropdown-item" href="#">Mensajes</a></li>
                                <li><a class="dropdown-item" href="#">Editar Perfil</a></li>
                                <li><a class="dropdown-item" href="../login.html">Cerrar sesion</a></li>
                              </ul>
                        </div>
                     </div>
                <h3 class="i-name"> Ventas</h3>
                <div class="interface2">
                    
                    <div class="container-container3">
                        <div class="content">
                            <div class="container-container2">
                                <div class="precios" >
                                <button class="new-facture-btn" >Nueva venta</button>
                                <div class="precios-container text-light" >
                                    <div class="scaner">
                                        <h1>Lector de Código de Barras</h1>
                                        <label for="codigo_barras">Escanea el código de barras:</label>
                                    </div>

                                    <input type="text" id="codigo_barras" autofocus>
                                    <p>Precio del producto: <span id="precio_producto" class="precio-grande">-</span></p>
                                    <p>Nombre del producto: <span id="nombre_producto" class="nombre-producto">-</span></p>

                                </div>
                            </div>
                                <hr>
                
                            <section class="section-container" >
                            <input    class="input-2" type="text" placeholder="Buscar por código de factura">
                            <select name="filter-search" id="filter-search">
                                <option disabled value="elija opcion"> Elija una opcion de filtrado</option>
                                <option value="all-clients"> Todos los clientes</option>
                                <option value="recent"> Recientes</option>
                            
                            </select>
                
                             </section>
                     <section class="form-section">
                
                            
                        <div class="board">
                            <table width="100%">
                        <thead class="thead-light">
                            <th>CODIGO</th>
                            <th>FECHA</th>
                            <th>CLIENTE</th>
                            <th>MONTO TOTAL</th>
                            <th>VENDEDOR</th>
                            <th>ELIMINAR</th>
                        </thead>
                                <tbody>
                                @foreach($ventas as $venta)
                                    <tr>
                                
                                    <td class="facture-data">
                                       
                                        <div class="facture-code">
                                            {{$venta->id}}
                                    </div>
                                            
                                        
                
                                        
                                    </td>
                
                             
                                       
                                        <td class="facture-date">
                                            {{$venta->Fecha}}
                                            
                                        
                
                                      
                                    </td>
                
                                  
                                       
                                        <td class="facture-customer">
                                            {{$venta->Cliente}}
                                            
                                        
                
                                       
                                    </td>
                
                                    
                                       
                                        <td class="facture-Total amount">
                                            ${{ number_format($venta->Montototal, 0, ',', '.') }}
                                            
                                        
                
                                        </td>
                                   
                
                                    
                                       
                                        <td class="facture-seller">
                                             {{$venta->Vendedor}}
                                            
                                        
                
                                        
                                    </td>
                
                
                
                                   
                                       
                                        <td class="facture-delete">
                                        <form action="{{ url('/venta/'.$venta->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <input type="submit" onclick="return confirm('¿Estas seguro de borrar los Datos?')" value="Eliminar">
                </form>
                                            
                                        
                
                                        
                                  
                                                  
                                                 </tr>
                                @endforeach
                                </tbody>
                             </table>
                
                             
                        </div>
                
                
                
                           <!--Fin tabla estructura y fila uno-->
                    
                
                        <!--aqui habia un div cerrado-->
                
                    </section>
                            </div>
                            
                        </div>
                    </div>
                    </div>
             </div>
            </div>

        </section>
        
       <!--<button class="delete-1"> <i class="fa-solid fa-trash-can"></i></button>
        

        <button class="pay-1"> <i class="fa-solid fa-money-bill-wave icon"></i></button> -->



        <!-- <td class="facture-delete">
                            <i class="fa-solid fa-trash-can"></i>
                        solo para estilizar sin ser button-->
     <script src="../Js/ventas.js"></script>
     
     

</body>
</html>
