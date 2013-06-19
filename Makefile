deploy: site.yaml clean
	hyde gen

pub: deploy
	if ! git status | egrep -q '^nothing to commit.*working directory clean'; then echo Untracked files, not pushing && exit 1; fi
	rsync -Pavz --delete deploy/ www.subiron.org:/srv/www/subiron.org/www/htdocs/new/

clean:
	rm -rf deploy

serve: deploy
	hyde serve -p 8080

.DEFAULT: clean serve pub
