# Code that written below is belong to Zain Alwan Wima Irfani. You may
# not use, share, modify, and study without the author's permission
# (zainalwan4@gmail.com).

JS_OUTPUT = app.js
JS_OUTPUT_DIR = ../../public/assets/js
JS_OUTPUT_PATH = ${JS_OUTPUT_DIR}/${JS_OUTPUT}

all: js

js: app.js
	@echo "Compiling JavaScript codes..."
	mkdir -p ${JS_OUTPUT_DIR}
	touch ${JS_OUTPUT_PATH}
	@echo "JavaScript codes was SUCCESSFULLY compiled."

clean:
	@echo "Removing compiled CSS..."
	rm -r -f ${JS_OUTPUT_DIR}
