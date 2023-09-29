import { createConnection } from "mysql";
import express from "express";
const app=express();

const connection=createConnection({
host:"localhost",
user:"root",
password:"Agra@2023",
database:"thebvtalks"});

//connect to the database
connection.connect((error)=>{
    if (error)
        throw error;
    else
        console.log("connected to the database successfully!!");
});

//app.get("/",function(req,res){
  // res.sendfile(__dirname+"/index.html");
//})
    
//set app port
app.listen(4500);
    