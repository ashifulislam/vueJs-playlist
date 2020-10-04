new Vue({
    //Here is the root element
    el:'#vue-app',
    //our data object
    data:{
        //added to this vue instances
        position:'is here',
        age:'',
        age_update:20,
        x:0,
        y:0,
        a:0,
        b:0,
        job:'Software Engineering',
        name:'',
        website:'https://web.facebook.com/?_rdc=1&_rdr',
        website2:'https://github.com/ashifulislam?tab=repositories',
        website_tag:'<a href="https://twitter.com/ashiful_prince">Twitter Profile</a>'
    },
    methods:{
        showName:function(last_name){

            return 'My name is ashiful islam '+last_name+' '+this.position
        },
        //Perform the addition here
        add_age:function(inc){
            this.age+=inc;
        },
        //Perform the subtraction here
        subtract_age(dec) {
            this.age -= dec;
        },
        UpdateXY:function(event){
            this.x=event.offsetX;
            this.y=event.offsetY;
        },
        click:function(){
            alert('You clicked me');
        },
        log_name:function(){
        console.log("You entered you name babu");
        },
        log_age:function() {
            console.log("You entered you age babu");
        },
        add_to_A:function(){
           return this.a + this.age_update;
        },
        add_to_B:function(){
          return  this.b + this.age_update;
        }


    },



});