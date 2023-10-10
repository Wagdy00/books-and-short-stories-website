</main>

<!--Start main-footer-->
<style>
    body{
        line-height: 1.5;
        font-family: 'Poppins', sans-serif;
    }
    *{
        margin:0;
        padding:0;
        box-sizing: border-box;
    }
    .container{
        max-width: 1170px;
        margin:auto;
    }
    .row{
        display: flex;
        flex-wrap: wrap;
    }
    ul{
        list-style: none;
    }
    .footer{
        background-color: #313435;
        padding: 70px 0;
    }
    .footer-col{
        width: 25%;
        padding: 0 15px;
    }
    .footer-col h4{
        font-size: 18px;
        color: #ffffff;
        margin-bottom: 35px;
        font-weight: 500;
        position: relative;
    }
    .footer-col h4::before{
        content: '';
        position: absolute;
        left:0;
        bottom: -10px;
        background-color: #e91e63;
        height: 2px;
        box-sizing: border-box;
        width: 50px;
    }
    .footer-col ul li:not(:last-child){
        margin-bottom: 10px;
    }
    .footer-col ul li a{
        font-size: 16px;
        color: #ffffff;
        text-decoration: none;
        font-weight: 300;
        color: #bbbbbb;
        display: block;
        transition: all 0.3s ease;
    }
    .footer-col ul li a:hover{
        color: #ffffff;
        padding-left: 8px;
    }
    .footer-col .social-links a{
        display: inline-block;
        height: 40px;
        width: 40px;
        background-color: rgba(255,255,255,0.2);
        margin:0 10px 10px 0;
        text-align: center;
        line-height: 40px;
        border-radius: 50%;
        color: #ffffff;
        transition: all 0.5s ease;
    }
    .footer-col .social-links a:hover{
        color: #24262b;
        background-color: #ffffff;
    }

    /*responsive*/
    @media(max-width: 767px){
        .footer-col{
            width: 25%;
            margin-bottom: 30px;
        }
    }

</style>
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="footer-col">
                <h4>company</h4>
                <ul>
                    <li><a href="index.php">Books</a></li>
                    <li><a href="storyvol2.php">Stories</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>get help</h4>
                <ul>
                    <li><a href="#">returns</a></li>
                    <li><a href="#">payment options</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>our services</h4>
                <ul>
                    <li><a href="storyvol2.php">See a story</a></li>
                    <li><a href="newStory.php">Creat a one</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>follow us</h4>
                <div class="social-links">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
    </div>
</footer>
    <!-- !start #footer -->





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- Owl Carousel Js file -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!--  isotope plugin cdn  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js" integrity="sha256-CBrpuqrMhXwcLLUd5tvQ4euBHCdh7wGlDfNz8vbu/iI=" crossorigin="anonymous"></script>

    <!-- Custom Javascript-->
    <script src="index.js"></script>
    </body>
    </html>