const { createApp } = Vue;

	const app = createApp({
		data(){
			return{
				pizzerias:null,
				hamburgueserias:null,
				alitas:null
		}
	},

	methods:{
			mostrarApi(){
				 var config = {
               	method: 'get',
                url: '../api/apiBR.php'
                };

                axios(config)
                .then(function (response){
                    app.pizzerias = response.data
                
                })
                .catch(function (error){
                console.log(error);
                });

                 var config2 = {
               	method: 'get',
                url: '../api/apiBR2.php'
                };

                axios(config2)
                .then(function (response){
                    app.hamburgueserias = response.data
                
                })
                .catch(function (error){
                console.log(error);
                });

                  var config3 = {
               	method: 'get',
                url: '../api/apiBR3.php'
                };

                axios(config3)
                .then(function (response){
                    app.alitas = response.data
                
                })
                .catch(function (error){
                console.log(error);
                });


				}
			},

	mounted(){
		this.mostrarApi();
	}

}).mount('#contenedor');