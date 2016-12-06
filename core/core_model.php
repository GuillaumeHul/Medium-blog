<?php
	function count_table($table, $options=array())
	{
		global $connexion;

		try
		{
			$sql = "SELECT count(*) as nb FROM " . $table;

			if ((isset($options["wherecolumn"])) && (isset($options["wherevalue"])))
			{
				$sql .= " WHERE " . $options["wherecolumn"] . "= '" . $options["wherevalue"] . "'";
			}

			// On envoie la requète
			$query = $connexion->prepare($sql);
			// On exécute la requête
			$query->execute();
			// On récupère le résultat
			$result = $query->fetch();
			// Supprime le curseur
			$query->closeCursor();
			// On retourne le nombre sélectionnés
			return $result["nb"];
		}

		catch ( Exception $e )
		{
			die("Une erreur, une de plus..." . $e->getMessage());
		}
	}

	function select_table($table, $options=array())
	{
		global $connexion;

	    try
	    {
			$sql = "SELECT * FROM " . $table;

			if ((isset($options["wherecolumn"])) && (isset($options["wherevalue"])))
			{
				$sql .= " WHERE " . $options["wherecolumn"] . "= '" . $options["wherevalue"] . "'";
			}

			if (isset($options["orderby"]))
			{
				$sql .= " ORDER BY " . $options["orderby"];
			}

			if (isset($options["order"]))
			{
				$sql .= " " . $options["order"];
			}

			if (isset($options["limit"]))
			{
				$sql .= " LIMIT ";
				if (isset($options["offset"]))
				{
					$sql .= $options["offset"] . ", ";
				}
					$sql .= $options["limit"];
			}

			//echo $sql; exit;

	        $query = $connexion->query($sql);
	        $data = $query->fetchAll();
	        $query->closeCursor();
	        return $data;
	    }
	    catch (Exception $e)
	    {
	        die('Erreur SQL :' .$e->getMessage());
	    }
	}

	function delete_table($table, $options=array())
	{
		global $connexion;

		try
		{
			$sql = "DELETE FROM " . $table;
			if (isset($options["id_column"]) && isset($options["id"]))
			{
				$sql .= " WHERE " . $options["id_column"] ." = " . $options["id"];
			}


			//echo $sql; exit;

			$query = $connexion->exec($sql);
			$retour = true;
			return $retour;
		}
		catch (Exception $e)
		{
			$retour = false;
			return $retour;
		}
	}
