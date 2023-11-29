from flask import Flask, render_template, request
import subprocess

app = Flask(__name__)

@app.route('/')
def index():
    return render_template('index.html')

@app.route('/execute', methods=['POST'])
def execute_command():
    if request.method == 'POST':
        command = request.form['command']
        result = subprocess.run(command, shell=True, capture_output=True, text=True)
        return result.stdout

if __name__ == '__main__':
    app.run(host='0.0.0.0', port=80)
