# Chimp

<p align="center">
    <img src="https://github.com/fredhorsch/Chimp/blob/master/Objects/Chimp_Webpage.png" max-height="500">
</p>

### Client 🚤
This project is produced as i worked as a freelancer for the company [Segler](https://www.segler.eu/home.html). It is a middle sized company based near osnabrück, germany and they are producing conveyor systems.

### Goal 🎯
The goal was to build an app that helps the engineers to track mistakes that were made in the factory producing process. They should take a picture, write some comments about what is wrong with the part and then send it to a server. On this server the data will get scanned by a python algorythm and it will getting send to the right instituiton in segler that they can work things out.

### Features 📱
* Scanning Barcodes from employes for login.
* Scanning Barcodes from Drawings and fill that into the form.
* Taking multiple photos.
* Sending Photos to a SFTP Server with additional information stored in a JSON File.

### Challenges 🧨
A requierement was to send the images with additional comments over the internal network via SFTP.
Two ways could be:
    send the data on the image via meta-data. 
    send a json file along the image.
The company already worked with JSON so the IT-Department and I decided to use JSON along with the Image. One problem could be if the Image successfully was transfered but the JSON not, there could be problems on the Server. Therefor the Server searches for both files and if one is not existing then it will throw an error to the IT-Department. The Server-side stuff was not written by me.

### Program Sequence 🟢
##### Getting Server Connetion and Download config.json
The Application needs to get configured on the first time the user starts the app. Therefore the User has to fill out server connection credentials. Then the App will search for a file named: config.json. When it finds the file it will get the Files stored data.

##### User Login
A user can then scan a barcode to login. The barcode must have the following form: U_xnamex. Example: U_Max.

##### Submit a problem
After that the User can scan again some papers related to the machines. It will automatically fill out the form for the user. The user has also the option to manually type in all informations to the form. After that the user can send the images to the server via SFTP. 

#### Server is getting Image + JSON

The JSON name is for example: 
```543271_10_20200708_160956_0.json ```
Order-Nr, Positions-Nr, Date, Time, Counter for multiple Images

The sended JSON is structured in the following way:

```diff
{
    "Meldungstyp": "Material fehlt",
    "User": "Max",
    "Freitext": "Freitext",
    "Bereich": "Sägen"
}
```

## Webpage 💿
Open the Webpage of CHIMP with the following link: [Chimp](http://www.chimp.berlin/).

## Technologies used 🧑🏼‍💻
* Basics of the Webpage:
    * [HTML](https://www.w3schools.com/html/html_basic.asp) and [PHP Variables](https://www.w3schools.com/php/php_variables.asp)
    * [CSS](https://www.w3schools.com/css/css_intro.asp) and [SCSS](https://sass-lang.com/guide)
* Responsiveness of the Webpage:
    * [Flexbox](https://css-tricks.com/snippets/css/a-guide-to-flexbox/) - also using the game [Flexbox Froggy](https://flexboxfroggy.com/)
    * [Grid](https://css-tricks.com/snippets/css/complete-guide-grid/) - also using the game [Grid Garden](https://cssgridgarden.com/)
