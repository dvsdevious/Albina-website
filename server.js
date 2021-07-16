const express = require("express");
const app = express();
const dotenv = require("dotenv");
const mongoose = require("mongoose");
// Import routes
const authRoute = require("./routes/auth");
dotenv.config();

//Connect to DB
mongoose.connect(process.env.DB_CONNECT, {
  useNewUrlParser: true,
  useUnifiedTopology: true,
});
const db = mongoose.connection;
db.on("error", (error) => console.error(error));
db.once("open", () => console.log("Connected to Mongoose"));

//Middlewares
app.use(express.json());

// Route Middlewares
app.use("/api/user", authRoute);

app.listen(3000, () => console.log("Server Up and running"));
