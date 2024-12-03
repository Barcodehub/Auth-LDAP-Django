FROM python:3.9-slim

# Install system dependencies
RUN apt-get update && apt-get install -y \
	build-essential \
	libldap2-dev \
	libsasl2-dev \
	ldap-utils \
	libssl-dev \
	libffi-dev \
	python3-dev \
	&& rm -rf /var/lib/apt/lists/*

# Set work directory
WORKDIR /app

# Copy requirements and install Python dependencies
COPY requirements.txt .
RUN pip install --no-cache-dir -r requirements.txt

# Copy project files
COPY . .

# Expose port for Django
EXPOSE 8000

# Command to run the application
CMD ["python", "manage.py", "runserver", "0.0.0.0:8000"]
