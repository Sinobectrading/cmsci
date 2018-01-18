<!DOCTYPE HTML>
<html>

<?php include_once '../header.php'; ?>
<style>

</style>
</head>
<body>
<!-- header -->
<header role="header">
    <?php include_once 'nav.php'; ?>
</header>
 <!-- header -->

<!-- main -->

<main role="main-inner-wrapper" class="container" id="trackorder">
    <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 ">
        	<li class="grid">
                <figure class="effect-oscar">
                    <img src="../images/track.jpg" alt="" class="img-responsive"/>
                    <figcaption>
                        <h2>Tracking <span>Order</span></h2>
                        <p>Over 40,000 customers use our themes to power their</p>
                     </figcaption>
                </figure>
            </li>
        </div>

        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
        	<section class="content">
                <form action="" class="contat-from-wrapper" id="orderfm">
                    <span class="input input--kaede">
                        <input class="input__field input__field--kaede" type="text" id="input-35" />
                        <label class="input__label input__label--kaede" for="input-35">
                            <span class="input__label-content input__label-content--kaede">Customer ID</span>
                        </label>
                    </span>

                    <span class="input input--kaede">
                        <input class="input__field input__field--kaede" type="text" id="input-36" />
                        <label class="input__label input__label--kaede" for="input-36">
                            <span class="input__label-content input__label-content--kaede">Password</span>
                        </label>
                    </span>
                    <span class="input input--kaede">
                        <input class="input__field input__field--kaede" type="text" id="input-37" />
                        <label class="input__label input__label--kaede" for="input-37">
                            <span class="input__label-content input__label-content--kaede">PO Number</span>
                        </label>
                    </span>
                    
                    <input class="g-recaptcha" data-sitekey="6LfIBUEUAAAAACKRz19dKtKPl-B6CuyjEKQc7kms" data-callback='onSubmit' name="" type="submit" value="Track">
                </form>
            </section>
        </div>
    </div>

</main>

<!-- main -->

<!-- footer -->
<?php include_once 'footer.php'; ?>
<!-- footer --> 
<script>
   function onSubmit(token) {
     document.getElementById("orderfm").submit();
   }
</script>
<script>
    (function() {
        // trim polyfill : https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String/Trim
        if (!String.prototype.trim) {
            (function() {
                // Make sure we trim BOM and NBSP
                var rtrim = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g;
                String.prototype.trim = function() {
                    return this.replace(rtrim, '');
                };
            })();
        }

        [].slice.call( document.querySelectorAll( 'input.input__field' ) ).forEach( function( inputEl ) {
            // in case the input is already filled..
            if( inputEl.value.trim() !== '' ) {
                classie.add( inputEl.parentNode, 'input--filled' );
            }

            // events:
            inputEl.addEventListener( 'focus', onInputFocus );
            inputEl.addEventListener( 'blur', onInputBlur );
        } );

        function onInputFocus( ev ) {
            classie.add( ev.target.parentNode, 'input--filled' );
        }

        function onInputBlur( ev ) {
            if( ev.target.value.trim() === '' ) {
                classie.remove( ev.target.parentNode, 'input--filled' );
            }
        }
    })();
</script>
</body>
</html>