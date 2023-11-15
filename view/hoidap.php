<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Hỏi đáp</title>
    <style>
        html {
            font-family: sans-serif;
            font-size: 10px;
        }

        body {
            width: 100%;
            min-height: 100vh;
            font-size: 1.6rem;
            line-height: 140%;
            background-color: #f3f6f6;
            opacity: 0.3;
            /* background-image: repeating-radial-gradient(circle at 0 0, transparent 0, #f3f6f6 50px ), repeating-linear-gradient( #56d1b355, #56d1b3 ); */
            opacity: 1;
            display: grid;
            place-items: center;
        }

        .card {
            background: #fff;
            color: #333;
            margin: 15rem auto;
            width: 90%;
            max-width: 50rem;
            min-height: 30rem;
            border-radius: 2rem;
        }

        .hero {
            display: flex;
            justify-content: center;
            transform: translateY(-55%);
        }

        .hero .img {
            filter: drop-shadow(0rem 1.5rem rgba(0, 0, 0, 0.1));
            transition: 0.3s ease-out;
        }

        .card:hover .img {
            filter: drop-shadow(0rem 2.5rem rgba(0, 0, 0, 0.1));
        }

        .title {
            text-align: center;
            font-size: 5rem;
            padding: 1rem;
        }

        .faq {
            padding-top: 20px;
        }

        .acc-container {
            padding: 4rem 2rem;
        }

        .acc-btn {
            width: 100%;
            padding: 1.6rem 2rem;
            font-size: 1.6rem;
            cursor: pointer;
            background: inherit;
            border: none;
            outline: none;
            text-align: left;
            transition: all 0.5s linear;
        }

        .acc-btn:after {
            content: "\27A4";
            color: #fa8d0c;
            float: right;
            transition: all 0.3s linear;
        }

        .acc-btn.is-open:after {
            transform: rotate(90deg);
        }

        .acc-btn:hover,
        .acc-btn.is-open {
            color: #000;
            font-weight: bold;
        }

        .acc-content {
            max-height: 0;
            color: rgba(0, 0, 0, 0.75);
            font-size: 1.5rem;
            margin-top: 0 2rem;
            padding-left: 1rem;
            overflow: hidden;
            transition: max-height 0.3s ease-in-out;
            border-bottom: 1px solid #ccc;
        }

        .credit {
            text-align: center;
            padding: 1rem;
        }

        .credit a {
            text-decoration: wavy underline;
            color: dodgerblue;
        }

        
    </style>
</head>

<body>

    <main class="card">
        <h2 class="title faq">FAQ</h2>

        <div class="acc-container">
            <button class="acc-btn">
                1. Mua sản phẩm Xshop Shop được bảo hành như thế nào?
            </button>
            <div class="acc-content">
                <p>
                    
                </p>
            </div>

            <button class="acc-btn">
                2. Mua sản phẩm tại FPT Shop có được đổi trả không? Nếu được thì phí
                đổi trả sẽ được tính như thế nào?
            </button>
            <div class="acc-content">
                <p>
                  
                </p>
            </div>

            <button class="acc-btn">
                3. FPT Shop có chính sách giao hàng tận nhà không? Nếu giao hàng tại
                nhà mà không ưng sản phẩm có được trả lại không?
            </button>
            <div class="acc-content">
                <p>
                   
                </p>
            </div>

            <button class="acc-btn">
                4. Làm thế nào để được mua hàng theo chính sách F.Friends?
            </button>
            <div class="acc-content">
                <p>
                  
                </p>
            </div>

            <button class="acc-btn">
                5. FPT Shop có giao hàng tại nhà không ? Chất lượng sản phẩm có thay
                đổi không ?
            </button>
            <div class="acc-content">
                <p>
                   
                </p>
            </div>

            <button class="acc-btn">6. Tôi muốn kiểm tra Imei máy ?</button>
            <div class="acc-content">
                <p>
                  
                </p>
            </div>

            <button class="acc-btn">
                7. Tôi mua sản phẩm Apple tại FPT Shop sẽ có khác biệt gì ?
            </button>
            <div class="acc-content ft-cpr">
                <p>
                    FPT Shop là đại lý ủy quyền bán hàng Apple chính hãng tại Việt
                    Nam, FPT Shop chỉ bán 1 loại hàng hóa duy nhất là: Hàng chính
                    hãng.
                </p>
            </div>
        </div>
    </main>

    <script>
        const btns = document.querySelectorAll(".acc-btn");

        // fn
        function accordion() {
            // this = the btn | icon & bg changed
            this.classList.toggle("is-open");

            // the acc-content
            const content = this.nextElementSibling;

            // IF open, close | else open
            if (content.style.maxHeight) content.style.maxHeight = null;
            else content.style.maxHeight = content.scrollHeight + "px";
        }

        // event
        btns.forEach((el) => el.addEventListener("click", accordion));

        /*
           
               Jokes are from > 
                https://chartcons.com/100-funny-trick-questions-answers/
                Background image from > 
                https://www.magicpattern.design/tools/css-backgrounds
           
        */
    </script>
</body>

</html>