<template>
        <div class="row justify-content-center">
            <div class="col-md-8">
				<input class="btn-block" name="sumname" type="text" v-model="summoner.name">
            </div>
            <div class="col-md-4">
            	<button class="btn-block" @click="searchSummoner">Buscar invocador</button>
            </div>
        <br>
        <div v-if="mostrar">
        <div>
            <div v-for="sum in summoners">
<div class="card" style="width: 18rem;">
  <img class="card-img-top" v-bind:src="'http://ddragon.leagueoflegends.com/cdn/8.13.1/img/profileicon/' + sum.profileIconId + '.png'" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Nombre: {{ sum.name }}</h5>
        <h5 class="card-title">Nivel: {{ sum.summonerLevel }}</h5>
    <a href="#" @click="storeSummoner(sum)" class="btn btn-primary">Añadir invocador</a>
  </div>
</div>
            </div>
        </div>
        </div>

        </div>

        
        



</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        data() {
        	return {
        		summoners : [] ,
        		summoner: {
        			name: ''
        		},
                mostrar : true
        	}
        },
        methods: {
        	searchSummoner() {											
          axios.post('/MySummoner' , this.summoner)
          .then(response => {
            this.summoners.unshift(response.data);
            console.log(this.summoners);
          })
          .catch((err) => {
            this.mostrar = !this.mostrar;
            console.log(err);
          })
        	},
        
            storeSummoner(sum) {
            console.log(sum);
            axios.post('/MySummoner/store' , sum)
            .then(response => {
            console.log(response);
            location.reload();
            })
            .catch((err) => {
            console.log(err);
            })                
            }
        }
    }
</script>
