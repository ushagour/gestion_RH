        $("#stag").change(function() {
            if(this.checked) {

                $("#stagiare").show();
                  $("#employe").hide();

            }
            else{
                $("#employe").show();

                $("#stagiare").hide();
            }
        });