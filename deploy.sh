#!/bin/bash
echo "Executing deploy.sh"

gitLastCommit=$(git show --summary --grep="Merge pull request")
if [[ -z "$gitLastCommit" ]]
then
	lastCommit=$(git log --format="%H" -n 1)
else
	echo "We got a Merge Request!"
	#take the last commit and take break every word into an array
	arr=($gitLastCommit)
	#the 5th element in the array is the commit ID we need. If git log changes, this breaks. :(
	lastCommit=${arr[4]}
fi
echo "Last commit" $lastCommit

filesChanged=$(git diff-tree --no-commit-id --name-only -r $lastCommit)
if [ ${#filesChanged[@]} -eq 0 ]; then
    echo "No files to update"
else
    for f in $filesChanged
	do
		if [ "$f" != ".travis.yml" ] && [ "$f" != "deploy.sh" ]
		then
	 		echo "Uploading $f"
	 		curl --ftp-create-dirs -T $f -u $SFTP_USER:$SFTP_PASS ftp://ftp.kilometresolidari.cat/public_html/$f
		fi
	done
fi