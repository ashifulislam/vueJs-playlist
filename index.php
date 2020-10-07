<!DOCTYPE html>
<html>
     <head>
         <title>First vue project</title>
         <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12"></script>
         <link rel="stylesheet" href="styles.css">
     </head>
     <body>

     </body>
    <div id="vue-app">
        <h1>DATA BINDING</h1>
        <a v-bind:href="website">Facebook</a><br><br>
        <a v-bind:href="website2">Prince's_GitHub_Profile</a>
        <br><br>
        <input type="text" name="first_name" v-bind:value="name"/>
        <p v-html="website_tag"></p>
        <h1>EVENTS</h1>
        <button v-on:click.once="add_age(1)">Add a year</button>
        <br><br>
        <button @click="subtract_age(1)">Subtract from year</button>
        <br><br>
        <button @dblclick="add_age(10)">Add 10 year</button>
        <br><br>
        <button @dblclick="subtract_age(10)">Subtract 10 year</button>
        <p>I am {{age}} years old</p>
        <div id="prince_canvas" @mousemove="UpdateXY">
            {{x}},{{y}}
        </div>
        <br>
        <a v-on:click.prevent="click" href="https://www.w3schools.com/">W3schools.com</a>
        <h1>KEYBOARD EVENTS</h1>
        <label>Name</label>
        <input type="text" name="name" v-model="name">
        <span>{{name}}</span>
        <lable>Age </lable>
        <input type="text" name="age" v-model="age">
        <span>{{age}}</span>
        <h1>WORKING WITH COMPUTED PROPERTIES</h1>
        <button v-on:click="a++">Add to A</button>
        <button v-on:click="b++">Add to B</button>
        <p>A -{{a}}</p>
        <p>B -{{b}}</p>
        <p>Age_update + A {{add_to_A()}}</p>
        <p>Age_update + B {{add_to_B()}}</p>
        <h1>DYNAMIC CSS</h1>
        <h2>Example 1</h2>
        <!--<div v-on:click="available =! available" v-bind:class="{red:available}">
            <span>Ashiful Islam Prince</span>
        </div>-->
        <h3>Example 2</h3>
        <button v-on:click="nearby =!nearby">Toogle nearby</button>
        <button v-on:click="available =!available">Toogle available</button>
        <div v-bind:class="compClasses">
            <span>Mehedi Hasan as well</span>
        </div>
        <h1>
            CONDITIONAL STATEMENTS
        </h1>
        <button v-on:click="error =! error">Toogle Error</button>
        <button v-on:click="success =! success">Toogle Success</button>
        <!--<p v-if="error">There has been an error</p>
        <p v-else-if="success">It seems successfull</p>-->
        <p v-show="error">There has been an error</p>
        <p v-show="success">Whooo, success :)</p>
        <h1>WORKING WITH LOOPS</h1>
        <ul>
            <li v-for="(prince,index) in characters">
                {{index}}.{{prince}}
            </li>
        </ul>
        <ul>
            <li v-for="(bappy, index) in ninjas">
                {{index}}.{{bappy.name}}-{{bappy.age}}

            </li>
        </ul>
        <template v-for="(bappy, index) in ninjas">
            <h3>{{index}}.{{bappy.name}}</h3>
            <p>{{bappy.age}}</p>
        </template>
        <template v-for="bappy in ninjas">
             <div v-for="(val,key) in bappy">
                 {{key}}-{{val}}
             </div>

        </template>



    </div>
     <script src="app.js"></script>
</html>