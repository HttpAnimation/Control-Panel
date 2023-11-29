import sys
import subprocess

if len(sys.argv) != 2:
    print("Usage: execute_command.py <command>")
    sys.exit(1)

command = sys.argv[1]
result = subprocess.run(command, shell=True, capture_output=True, text=True)
print(result.stdout)
