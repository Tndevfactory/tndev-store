@extends('backoffice.profiles.admin.admin')


@section('right-side-content-admin')
{{-- <x-breadcrumb/> --}}
 <h3 class="text-muted ff-oswald d-inline-block me-2"> products stats </h3>

           <div class="row row-cols-2">

               <div class="col">
                   <div class="p-3">
                        <canvas id="productByQuantity" ></canvas>
                   </div>
               </div>
               <div class="col">
                   <div class="p-3">
                        <canvas id="productByPrice" ></canvas>
                   </div>
               </div>

               <div class="col">
                   <div class="p-3">
                       <pre>
                            @php
                               // $var=$products;
                                //echo $var;
                               // print_r($keys);
                                // print_r($product);
                               // print_r($qty);
                            @endphp
                        </pre>
                   </div>
               </div>



           </div>



            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

            <script>

            let productByQuantity = document.querySelector('#productByQuantity').getContext('2d');
            let productByPrice = document.querySelector('#productByPrice').getContext('2d');

           // every thing from laravel become a string in door of vanilla
           //qty product
            let productsName="{{ $product }}"
            let qty="{{ $qty }}"

            /// price product
            let productsNamePrice="{{ $productName }}"
            let price="{{ $price }}"


            productsName = convertLaravalVariable(productsName)
            qty = convertLaravalVariable(qty)

            productsNamePrice = convertLaravalVariable(productsNamePrice)
            price = convertLaravalVariable(price)


            drawGraph(productByQuantity, productsName, qty, 'Products by stock quantity')
            drawGraph(productByPrice, productsNamePrice, price, 'Products by price')


            function drawGraph(graph, labelXAxis, datasetData, titleGraph){

                var myChart = new Chart(graph, {
                type: 'bar',
                data: {
                   // labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                    labels: labelXAxis,
                    datasets: [{
                        label: titleGraph,
                       // data: [12, 19, 3, 5, 2, 3],
                        data: datasetData,
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(153, 102, 255, 0.2)',
                            'rgba(255, 159, 64, 0.2)'
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)'
                        ],
                        borderWidth: 1
                    }]
                },
                    options: {
                        scales: {
                            y: {
                                beginAtZero: true
                            }
                        }
                    }
                });

            }

             function convertLaravalVariable(laravalVar){
                let data;
                data=laravalVar.replace(/[\[\]']+/g,'')
                data=data.replace(/&quot;/g,'')
                data=data.split(",");
            return data;
            }

            </script>




@endsection
