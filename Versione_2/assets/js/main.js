var app = new Vue
({
    el: '#app',
    data: 
    {
        arrayAlbums: []
    },

    mounted()
    {
        //Chiamata axios (percorso parte da index.html!)
        axios.get('./api/index.php').then((res) =>
        {
            // console.log(res.data);

            this.arrayAlbums = res.data;
        })
    },

    beforeUpdate()
    {

    },

    methods:
    {

    }

})