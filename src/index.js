import React from "react";
import ReactDOM from "react-dom";

ReactDOM.render(
<React.StrictMode>
</React.StrictMode>,
document.getElementById("root")
);

const express = require("express");
const app = express();
const port = 3000;
app.use(express.json());
app.use(
    express.urlencoded({
        extended: true,
    })
);
app.get("/", (req, res) => {
    res.json({ message: "ok" });
});
app.listen(port, () => {
    console.log(`app listening at http://localhost:${3000}`);
});
