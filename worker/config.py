# Setup the loglevel
logging_level  = "debug"

# Api location for Dispatcher. No trailing slash !!
# Dispatcher is exposing the API at "/api/" location
api_location = "http://192.168.110.128:8888/api"
# The API key set up in the `agents` SQL table
api_key      = "123"

# Specify worker refresh time in seconds
refresh_new_jobs    = 60

# Yara settings
# Set-up path for Yara binary
yara_path           = "C:/Users/IEUser/Desktop/yara-3.7.0-win32/yara32.exe"
# Use 8 threads to scan and scan dirs recursively
yara_extra_args     = "-p 8 -r"
# Where to store Yara temp results file
yara_temp_dir       = "C:/Users/IEUser/Desktop/worker/tmp/"

# md5sum settings
# binary location
md5sum_path         = "C:/Users/IEUser/Desktop/worker/md5sum.exe"

# tail settings
# We only want the first 1k results
head_path_and_args  = ["C:/Users/IEUser/Desktop/worker/head.exe", "-1000"]

# Virus collection should NOT have a trailing slash !!
virus_collection                = ""
virus_collection_control_file   = "repo_control.txt"
