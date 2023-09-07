<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/iziToast.min.css">
</head>

<body>
    <script src="../js/iziToast.min.js" type="text/javascript">
        iziToast.settings({
            timeout: 10000,
            resetOnHover: true,
            icon: 'material-icons',
            transitionIn: 'flipInX',
            transitionOut: 'flipOutX',
            onOpening: function() {
                console.log('callback abriu!');
            },
            onClosing: function() {
                console.log("callback fechou!");
            }
        });
    </script>
    <script>
        iziToast.show({
            theme: 'dark',
            icon: 'icon-person',
            title: 'Hey',
            message: 'Welcome!',
            position: 'center', // bottomRight, bottomLeft, topRight, topLeft, topCenter, bottomCenter
            progressBarColor: 'rgb(0, 255, 184)',
            buttons: [
                ['<button>Ok</button>', function(instance, toast) {
                    alert("Hello world!");
                }, true], // true to focus
                ['<button>Close</button>', function(instance, toast) {
                    instance.hide({
                        transitionOut: 'fadeOutUp',
                        onClosing: function(instance, toast, closedBy) {
                            console.info('closedBy: ' + closedBy); // The return will be: 'closedBy: buttonName'
                        }
                    }, toast, 'botao');
                }]
            ],
            onOpening: function(instance, toast) {
                console.info('callback abriu!');
            },
            onClosing: function(instance, toast, closedBy) {
                console.info('closedBy: ' + closedBy); // tells if it was closed by 'drag' or 'button'
            }
        });
    </script>
</body>

</html>