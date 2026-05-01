import time
import sys

def animated_text(text, delay=0.05):
    for char in text:
        sys.stdout.write(char)
        sys.stdout.flush()
        time.sleep(delay)
    print()  # Move to the next line after finishing

# Example usage
animated_text("Hello, welcome to the animated text demo!", delay=0.1)