<x-app-layout>
    <x-slot name="header">



    </x-slot>
    @can('user')

    <div class="flex-wrap container mx-auto  text-white p-6 ">
        <div class="py-6 border border-white  lg:px-5 rounded-md max-w-lg">
            <h1 class="text-lg">Gostaria de ter acesso a conteúdos mais completos e sem propagandas? Assine nossa area premium por um valor acessivel </h1>

            <div id="delete-btn" class="max-w-full mx-auto lg:px-5 py-6 bg-cyan-400   text-center rounded-full text-white">

                <button class="text-amber-400 text-lg" onclick="acao()">Inscrever-se</button>

            </div>

            <!--     <div class="border border-white  lg:px-5 rounded-md place-content-center py-6 ">
                    <img class=" w-40 h-40 rounded-lg  " src="{{ asset('site/img/vuc.jpeg') }}" />

                </div>-->







            <div style="left: 40%; top: 50%;" id="overlay" class=" hidden max-w-full mx-auto lg:px-5 fixed
             bg-cyan-400  rounded-lg py-6 ">

                <div class="right-0 top-0 absolute ">

                    <svg class="h-6 w-6 cursor-pointer p-1 hover:bg-gray-300 rounded-full" id="close-modal" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>

                    </svg>
                </div>
                <!-- janela do paypal-->



                <script src="https://www.paypal.com/sdk/js?client-id=test&currency=USD"></script>
                <!-- Set up a container element for the button -->
                <div id="paypal-button-container"></div>
                <script>
                    paypal.Buttons({
                        // Sets up the transaction when a payment button is clicked
                        createOrder: (data, actions) => {
                            return actions.order.create({
                                purchase_units: [{
                                    amount: {
                                        value: '77.44' // Can also reference a variable or function
                                    }
                                }]
                            });
                        },
                        // Finalize the transaction after payer approval
                        onApprove: (data, actions) => {
                            return actions.order.capture().then(function(orderData) {
                                // Successful capture! For dev/demo purposes:
                                console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));
                                const transaction = orderData.purchase_units[0].payments.captures[0];
                                alert(`Transaction ${transaction.status}: ${transaction.id}\n\nSee console for all available details`);
                                // When ready to go live, remove the alert and show a success message within this page. For example:
                                // const element = document.getElementById('paypal-button-container');
                                // element.innerHTML = '<h3>Thank you for your payment!</h3>';
                                // Or go to another URL:  actions.redirect('thank_you.html');
                            });
                        }
                    }).render('#paypal-button-container');
                </script>












            </div>

            <script>
                window.addEventListener('DOMContentLoaded', () => {
                    const overlay = document.querySelector('#overlay')
                    const delBtn = document.querySelector('#delete-btn')
                    const closeBtn = document.querySelector('#close-modal')

                    const toggleModal = () => {
                        overlay.classList.toggle('hidden')
                        overlay.classList.toggle('flex')
                    }

                    delBtn.addEventListener('click', toggleModal)

                    closeBtn.addEventListener('click', toggleModal)
                })
            </script>
        </div>
    </div>
    @elsecan('admin')
    @include('premium.dash')

    @endcan
</x-app-layout>