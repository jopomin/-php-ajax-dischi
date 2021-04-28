var app = new Vue ({
    el: '#root',
    data: {
        discs: [],
    },
    
    methods: {
        getDiscs() {
            const self = this;
            for(let i = 0; i < 6; i++) {
                axios
                .get('http://localhost:8888/partials/server.php')
                .then((result) => {
                self.discs.push(result.data);
                })
            }    
        }
    }
})

