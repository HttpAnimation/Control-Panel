# Control Panel

Control Panel is a simple web application that provides a user interface to execute commands on the host machine. It consists of two versions: one implemented in Python using Flask and another in PHP.

## Python Version

### Prerequisites
- [Docker](https://www.docker.com/) installed on your machine

### Usage
1. Clone the repository:
   ```bash
   git clone https://github.com/HttpAnimation/Control-Panel.git
   cd Control-Panel
   ```

2. Build and run the Python version:
   ```bash
   docker build -t control-panel-python -f Dockerfile.python .
   docker run -p 9096:80 control-panel-python
   ```

3. Access the control panel in your web browser at [http://localhost:9096](http://localhost:9096).

4. Enter a command in the form and submit it to execute on the host machine.

## PHP Version

### Prerequisites
- [Docker](https://www.docker.com/) installed on your machine

### Usage
1. Clone the repository:
   ```bash
   git clone https://github.com/HttpAnimation/Control-Panel.git
   cd Control-Panel
   ```

2. Build and run the PHP version:
   ```bash
   docker build -t control-panel-php -f Dockerfile.php .
   docker run -p 9097:80 control-panel-php
   ```

3. Access the control panel in your web browser at [http://localhost:9097](http://localhost:9097).

4. Enter a command in the form and submit it to execute on the host machine.

## Notes
- Both versions of the control panel execute commands on the host machine. Ensure that you understand the security implications of running such an application, especially when accessible from external networks.

Feel free to contribute, report issues, or provide feedback!