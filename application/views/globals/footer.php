</div>

<footer class="page-footer font-small blue-grey lighten-5 w-100"  id="footer">
  <div class="footer-copyright text-center  py-3">© 2020 Copyright:
    <a  href="<?=base_url()?>home"> gestionRH </a>
  </div> 
  

</footer>
</div>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

<script type="text/javascript" src="<?=base_url()?>assets/js/jquery-3.4.1.min.js"></script>

<script type="text/javascript" src="<?=base_url()?>assets/js/myscripts.js"></script>

<script>

var myVar;

function myFunction() {
  myVar = setTimeout(showPage, 1000);
}

function showPage() {
  document.getElementById("loader").style.display = "none";
  document.getElementById("page").style.display = "block";
}
$(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });


  
</script>


</body>
</html>
