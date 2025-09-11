<fieldset>
    <legend>Add</legend>
    <p>Name</p>
    <input id="name" name="name" type="text" style=""></input>
    <p>Image</p>
    <input id="image" name="image" type="text" style=""></input>
    <p>Description</p>
    <textarea id="description" name="description" style="width:200;height:100;"></textarea>
    <p>Location (specific)</p>
    <input id="location1" name="location1" type="text" style=""></input>
    <p>Location (user)</p>
    <input id="location2" name="location2" type="text" style=""></input>
    <p>Abilities</p>
    <input id="abilities" name="abilities" type="text" style=""></input>
    <p>Stats</p>
    <input id="stats" name="stats" type="text" style=""></input>
    </br>
    </br>
    <button id="btnSave">Save</button>
</fieldset>

<script>

    const name = document.getElementById('name').value;
    const image = document.getElementById('image').value;
    const description = document.getElementById('description').value;
    const location1 = document.getElementById('location1').value;
    const location2 = document.getElementById('location2').value;
    const abilities = document.getElementById('abilities').value;
    const stats = document.getElementById('stats').value;

    const obj = {name: name, image: image, description: description, location1: location1, location2: location2, abilities: abilities, stats: stats};
    const output = JSON.stringify(obj);
    console.log(output);
</script>


<?php 

?>