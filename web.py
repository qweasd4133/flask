from flask import Flask, render_template
from datetime import datetime
app = Flask(__name__)

@app.route("/")
def index():
    return "Hello 陳柏翰!"

@app.route("/mis")
def course():
    return "<h1>資訊管理導論</h1>"

@app.route("/today")
def today():
    now = datetime.now()
    return render_template("today.html", datetime = str(now))

@app.route("/about")
def about():
    return render_template("32132132132132.html")


if __name__ == "__main__":
    app.debug=True
    app.run()