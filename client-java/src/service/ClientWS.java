package service;

import java.util.List;
import java.util.Scanner;

public class ClientWS {
    static Scanner sc = new Scanner(System.in);
    static AdminService stub = new AdminService().getServicePort();

    public static void main(String[] args) throws SQLException_Exception {
    	boolean  is_log=false;
    	int t=0;
    	
    	do {
    		if(t==1)  System.out.println("Login ou mot de passe incorect ");
    		 System.out.println("--------------------COnnection-----------------");
        	 System.out.println("Entrer le login?");
        	 String email = sc.next();
        	 System.out.println("Entrer le password?");
        	 String password = sc.next();
          is_log= stub.loginService(email,password);
          if(!is_log)t=1;
    		
    	}while(is_log);
       
    	 
     affiche();
    	
    	 

    }

    public static void affiche() throws SQLException_Exception {
        System.out.println("--------------------CHOIX MENU-----------------");
        System.out.println("Que souhaitez vous faire?");
        System.out.println("1. Ajouter un(e) utilisateur(e).");
        System.out.println("2. Lister tous les utilisateur.");
        System.out.println("2. Lister modifier utilisateur.");
       
        System.out.println("0. Quitter le programme.");
        System.out.println();
        while (choix() != 0) {
            affiche();
        }
        ;
    }

    public static int choix() throws SQLException_Exception {
        System.out.println("Veuillez effectuer votre choix : ");
        int choix = sc.nextInt();
        if (choix == 1) {
            // créer
          
            System.out.println("Entrez le nom:");
            String nom = sc.next();
            System.out.println("Entrez le email:");
            String email = sc.next();
            System.out.println("Entrez le password:");
            String password = sc.next();
            stub.newUtilisateur(nom, email,password);
            System.out.println("------------------------");
            System.out.println("L'utilisateur(e) " + nom + " " + email + " a bien été ajouté à la base de donnée.");
            System.out.println("------------------------");

        } else if (choix == 2) {
            // lister
            List<Utilisateurs> Utilisateurs = stub.getall();
            for (Utilisateurs utilisateur : listeEtudiants) {
                System.out.println("------------------------");
                System.out.println(etudiant.getCode());
                System.out.println(etudiant.getNom());
                System.out.println(etudiant.getEmail());
                System.out.println("------------------------");
            }
        } else if (choix == 3) {
            // modifier
            System.out.println("Entrez l'identifiant de l'utilisateur  à modifier:");
            int id = sc.nextInt();
            Utilisateurs e = stub.getOne(id);

            System.out.println("-----------------------------------");
            System.out.println("Informations sur l'étudiant à modifier:");
            System.out.println("Prénom:" + e.getNom());
            System.out.println("Nom:" + e.email());
            System.out.println("-----------------------------------");

           

            System.out.println("Entrez le nouveau nom:");
            String nom = sc.next();
            System.out.println("Entrez le nouveau email:");
            String email = sc.next();
            stub.update(e.getCode(), nom, email);

        } else if (choix == 4) {
            // supprimer
            System.out.println("Entrez l'identifiant de l'utilisateur à supprimer:");
            int _id = sc.nextInt();
            stub.delete(_id);
            System.out.println("L'Utilisateur " + _id + " a bien été supprimé.");

        } else if (choix == 0) {
            // exit programm
            System.exit(0);
        }
        return choix;

    }
}
