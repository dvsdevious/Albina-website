import { MongoClient } from "mongodb";

function createClient() {
  const client = new MongoClient(
    "mongodb+srv://dbdvsdevious:dbsupersecretpassword@albina-website.tirrq.mongodb.net/users",
    {
      useNewUrlParser: true,
      useUnifiedTopology: true,
    },
    (err) => {
      if (err) console.log(err);
      console.log("Database Connected");
    }
  );

  client.usersCollection = function () {
    return this.db("test").collection("users");
  };

  return client;
}

export { createClient };
