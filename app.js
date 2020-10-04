new Vue({
    //Here is the root element
    el:'#vue-app',
    //our data object
    data:{
        //added to this vue instances
        position:'is here',
        job:'Software Engineering',
    },
    methods:{
        showName:function(last_name){

            return 'My name is ashiful islam '+last_name+' '+this.position
        }

    },
    website:'https://web.facebook.com/?_rdc=1&_rdr'


});