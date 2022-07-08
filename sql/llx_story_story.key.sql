-- Copyright (C) ---Put here your own copyright and developer email---


-- BEGIN MODULEBUILDER INDEXES
ALTER TABLE llx_story_story ADD INDEX idx_story_story_rowid (rowid);
ALTER TABLE llx_story_story ADD INDEX idx_story_story_title (title);
ALTER TABLE llx_story_story ADD INDEX idx_story_story_jobrules (jobrules);
ALTER TABLE llx_story_story ADD INDEX idx_story_story_accepttest (accepttest);
-- END MODULEBUILDER INDEXES

--ALTER TABLE llx_story_story ADD UNIQUE INDEX uk_story_story_fieldxy(fieldx, fieldy);

--ALTER TABLE llx_story_story ADD CONSTRAINT llx_story_story_fk_field FOREIGN KEY (fk_field) REFERENCES llx_story_myotherobject(rowid);

