@echo off
setlocal

:: Ask for the user's name
set /p UserName=Please enter your name: 

:: Base directories
set "DocumentsDir=%USERPROFILE%\Documents"
set "DesktopDir=%USERPROFILE%\Desktop"
set "DownloadsDir=%USERPROFILE%\Downloads"

:: Create structure in Documents
if not exist "%DocumentsDir%\documents_folder_layer_1\" mkdir "%DocumentsDir%\documents_folder_layer_1"
if not exist "%DocumentsDir%\documents_folder_layer_1\folder_layer_2\" mkdir "%DocumentsDir%\documents_folder_layer_1\folder_layer_2"
echo This file was in C:/users/%USERNAME%/Documents/documents_folder_layer_1/folder_layer_2 > "%DocumentsDir%\documents_folder_layer_1\folder_layer_2\info.txt"
echo This is a file from documents layer 1. > "%DocumentsDir%\documents_folder_layer_1\file_from_documents_layer_1.txt"
if not exist "%DocumentsDir%\documents_folder_layer_1\easterEgg\" mkdir "%DocumentsDir%\documents_folder_layer_1\easterEgg"
attrib -h "%DocumentsDir%\documents_folder_layer_1\easterEgg" 2>nul
attrib -h "%DocumentsDir%\documents_folder_layer_1\easterEgg\hidden.txt" 2>nul
echo Hello %UserName%, congrats on finding the hidden file. > "%DocumentsDir%\documents_folder_layer_1\easterEgg\hidden.txt"
attrib +h "%DocumentsDir%\documents_folder_layer_1\easterEgg\hidden.txt"
attrib +h "%DocumentsDir%\documents_folder_layer_1\easterEgg"

:: Create structure in Desktop
if not exist "%DesktopDir%\desktop_folder_layer_1\" mkdir "%DesktopDir%\desktop_folder_layer_1"
if not exist "%DesktopDir%\desktop_folder_layer_1\desktop_folder_layer_2\" mkdir "%DesktopDir%\desktop_folder_layer_1\desktop_folder_layer_2"
if not exist "%DesktopDir%\Desktop_file.xlsx" echo. > "%DesktopDir%\Desktop_file.xlsx"
echo This is a file directly on the Desktop. > "%DesktopDir%\desktop_folder_layer_1\file_from_desktop_layer_1.docx"
echo Hello %UserName%, this is a file from desktop layer 2. > "%DesktopDir%\desktop_folder_layer_1\desktop_folder_layer_2\file_from_desktop_layer_2.txt"

:: Create a large file of size greater than 2MB in desktop_folder_layer_2
set "LargeFilePath=%DesktopDir%\desktop_folder_layer_1\large_file.txt"
if not exist "%LargeFilePath%" fsutil file createnew "%LargeFilePath%" 2100000

:: Create structure in Downloads
if not exist "%DownloadsDir%\Downloads_folder_laer_1\" mkdir "%DownloadsDir%\Downloads_folder_laer_1"
echo This is a file directly in Downloads. > "%DownloadsDir%\Downloads_file.txt"
echo This is a file from downloads layer 1. > "%DownloadsDir%\Downloads_folder_laer_1\downloads_layer_1_file.docx"

echo Folder and File structure successfully created!
pause
