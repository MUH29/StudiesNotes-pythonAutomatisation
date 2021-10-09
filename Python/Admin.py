# Script to run as admin a ciommmand
import win32com.shell.shell as shell
commands = 'python githubBotbackGround.py'
shell.ShellExecuteEx(lpVerb='runas', lpFile='cmd.exe',
                     lpParameters='/c '+commands)
