
(function(){
    var defaultForm = {
        name: "",
        phone: "",
        email: "",
        skill_level: "",
        grade_level: "",
        programming_language: ""
    };

    angular.module("hspc", [])
        .controller("hspc.controller", function($scope, $http){
            var _self = this;
            this.registrationForm = Object.assign({}, defaultForm);

            this.register = function register($event){
                // TODO - form validation
                $event.preventDefault();

                $http.post("/api/register", _self.registrationForm)
                    .then(function(res){
                        swal("You are registered!", "We look forward to seeing you there!", "success");
                        this.registrationForm = Object.assign({}, defaultForm);
                    }, function(err){
                        console.log(err);
                        switch(err.status){
                            case 409: return swal("That email is already registered!", "", 'error');
                            case 500: return swal("Oops.. something went wrong", '', 'error');
                        }
                    });

                return false;
            }
        })
})()