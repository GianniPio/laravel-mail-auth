<template>
    <div id="list">
        <h1>List of Videogames</h1>

        <table>
            <tr>
                <th>Titolo</th>
                <th>Sottotitolo</th>
                <th>Voto</th>
            </tr>

            <tr v-for="videogame, i in videogames" :key= 'i'>
                <td>{{videogame.titolo}}</td>
                <td>{{videogame.sottotitolo}}</td>
                <td>{{videogame.rating}}</td>
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


    mounted() {

        axios.get('/api/videogames/list')
            .then(r => this.videogames = r.data)
            .catch(e => console.error(e));
    }
}
</script>
