var app = new Vue(
    {
        el: '#app',
        data : {
            disks : []
        },
        created: function () {
            axios
                .get('http://localhost/php-ajax-dischi/server.php')
                .then(
                    res => {
                        console.log(res);
                        this.disks = res.data;
                    }
                )
                .catch(
                    err => {
                        console.log(err);
                    }
                );
        }
    }
)