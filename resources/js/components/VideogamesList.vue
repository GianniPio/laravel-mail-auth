<template>
    <div id="list">
        <h1>List of Videogames</h1>

        <table>
            <tr>
                <th>Titolo</th>
                <th>Sottotitolo</th>
                <th>Voto</th>
                <th v-if="user">Azione</th>
            </tr>

            <tr v-for="videogame, i in videogames" :key= i>
                <td>{{videogame.titolo}}</td>
                <td>{{videogame.sottotitolo}}</td>
                <td>{{videogame.rating}}</td>
                <td v-if="user">
                    <!-- <a class="btn btn-danger m-1" :href="`api/videogame/delete/${videogame.id}`">Elimina</a> -->
                    <button @click="videogameDelete(videogame.id)" class="btn btn-danger m-1">Elimina</button>
                    </td>

            </tr>
        </table>


    </div>

    
</template>

<script>

export default {

    data: function() {

        return {

            videogames: []

        };
    },

    props: {
        user: String,
    },

    methods: {

        videogameDelete(id) {

            const self= this;
            axios.get(`api/videogame/delete/${id}`)
                .then(r => {

                    const game = self.getIndexById(id);
                    self.videogames.splice(game, 1);
                    // console.log(game);
                })
                .catch(e => console.log('e', e));
        },

        getIndexById(id) {

            for( let x=0; x<this.videogames.length; x++) {
                const videogame = this.videogames[x];

                if (videogame.id == id) {
                    return x;
                } 

                // return -1;

            }
        }
 
    },


    mounted() {

        axios.get('/api/videogames/list')
            .then(r => this.videogames = r.data)
            .catch(e => console.error(e));
    }
}
</script>
